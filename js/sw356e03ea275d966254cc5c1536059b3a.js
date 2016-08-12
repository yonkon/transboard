var IndexClass = BaseClass.extend({
    init: function () {
        this._super();
        this.initGeosuggest();
        this.initOther();
        var isDesktopOrTablet = document.body.clientWidth >= 768;
        if (isDesktopOrTablet) {
            this.initFacebook();
            this.initVideoPlayer()
        }
        ;
        this.initHomepageSearch();
        this.initTabsNavigation();
        this.initWelcomeInfo();
        this.initClickReport();
        this.initSpecialInputs();
        this.initAdsTitleHandler();
        this.initGptStickyClose();
        this.initHomeBanner()
    }, initFacebook: function () {
        if (typeof fb_connect_url == 'undefined')return false;
        var cache = $.ajaxSettings.cache;
        $.ajaxSettings.cache = true;
        $.getScript(fb_connect_url, function () {
            FB.init({appId: fb_app_id, status: true, cookie: true, xfbml: true})
        });
        $.ajaxSettings.cache = cache
    }, fblockActive: function (element, space) {
        $(space).find('.fblock').removeClass('active');
        $(element).closest('.fblock').addClass('active')
    }, initGeosuggest: function () {
        var thiz = this, $input = $('#cityField'), defaultText = $input.attr('defaultval'), defaultAlternative = $input.attr('defaultalternative');
        $input.focus(function () {
            if ($input.val() == defaultText || $input.val() == defaultAlternative)$input.val('');
            if ($input.val() == '') {
                $input.val(defaultAlternative);
                $input.addClass('ca2');
                $input.setSelection(0, 0)
            } else {
                var inputLength = $input.val().length;
                $input.setSelection(inputLength, inputLength)
            }
            ;
            thiz.fblockActive(this, '.searchmain')
        }).blur(function () {
            if ($input.val() == defaultAlternative)$input.val(defaultText)
        }).keydown(function () {
            if ($input.val() == defaultText || $input.val() == defaultAlternative)$input.val('').removeClass('ca2')
        }).geosuggest({
            showGeoSuggestions: false,
            saveAsDefaultLocationInCookie: true,
            loadDefaultLocationFromCookie: true,
            distanceSelect: $('#distanceSelect'),
            citiesOld: false,
            locationChanged: function (text, regionID, cityID, districtID, distance, byUser, locUrl) {
                thiz.updateCategoriesLinks(regionID, cityID, districtID, distance);
                var url = '';
                if (typeof locUrl !== "undefined")url = locUrl.replace(';', '_').replace(':', '-');
                if (typeof districtID !== "undefined" && districtID != 0) {
                    url += '/?search[district_id]=' + districtID;
                    if (typeof distance !== "undefined" && distance != 0)url += '&search[dist]=' + distance
                } else if (url.length && typeof distance !== "undefined" && distance != 0)url += '/?search[dist]=' + distance;
                $('#maincat-grid').find('a[data-search="1"]').each(function () {
                    $(this).attr('href', $(this).data('url') + url)
                })
            },
            cookiesLocationSaved: function () {
                return
            }
        })
    }, updateCategoriesLinks: function (regionID, cityID, districtID, distance) {
        return
    }, initOther: function () {
        var thiz = this;
        $.fn.setCursorPosition = function (pos) {
            this.each(function (index, elem) {
                if (elem.setSelectionRange) {
                    elem.setSelectionRange(pos, pos)
                } else if (elem.createTextRange) {
                    var range = elem.createTextRange();
                    range.collapse(true);
                    range.moveEnd('character', pos);
                    range.moveStart('character', pos);
                    range.select()
                }
            });
            return this
        };
        $('input#headerSearch').focus(function () {
            $this = $(this);
            if ($this.val() == '') {
                $this.addClass('ca2').val($this.attr('defaultval'));
                $this.setCursorPosition(0)
            } else if ($this.val() == $this.attr('defaultval')) {
                $this.val($this.attr('defaultval'));
                $this.setCursorPosition(0)
            }
            ;
            $('#distanceSelect').find('ul').addClass('hidden').hide();
            $('#categorySelectList').hide();
            thiz.fblockActive(this, '.searchmain')
        }).keydown(function () {
            $this = $(this);
            if ($this.val() == $this.attr('defaultval'))$this.removeClass('ca2').val('')
        }).keyup(function () {
            $this = $(this);
            if ($this.val().length == 0) {
                $this.addClass('ca2').val($this.attr('defaultval'));
                $this.setCursorPosition(0)
            }
        }).click(function () {
            $this = $(this);
            if ($this.val() == $this.attr('defaultval'))$this.setCursorPosition(0)
        }).bind('paste', function () {
            $this = $(this);
            if ($this.val() == $this.attr('defaultval'))$this.removeClass('ca2').val('')
        });
        if ($.inArray(sitecode, ['otomotopl', 'autovitro']) == -1 || $.cookie('newolx') != null)$('input#headerSearch').focus();
        $('#lastsearchclear').click(function () {
            $this = $(this);
            $.get(www_base_ajax + '/misc/clearcategories/', function () {
                $('.lastsearch, .youractivity').fadeOut()
            });
            return false
        });
        var allTags = null, maxSpace = $('#lastsearchBox').width() - $('#lastsearchclear').outerWidth(true);
        $('#lastsearchBox a.item').each(function (index) {
            allTags += ($(this).outerWidth(true));
            if (maxSpace > allTags)$(this).show()
        });
        mediaQuery();
        $(window).resize(function () {
            mediaQuery()
        })
        function mediaQuery() {
            var windowWidth = $(window).width();
            if (windowWidth < '1110') {
                $('body').addClass('smallscreen')
            } else $('body').removeClass('smallscreen')
        };
        if ($('#categorySelect').size() > 0) {
            var dropdownHeight = $('#categorySelectList > li').length * 28, dropdownTopMargin = $('#categorySelect').offset().top + $('#categorySelect').height();

            function scaleDropDown() {
                if ($('#categorySelectList').is(':visible')) {
                    var viewportHeight = $(window).height(), viewportSpace = viewportHeight - dropdownTopMargin - 18 + $(document).scrollTop();
                    if (dropdownHeight < viewportSpace) {
                        $('#categorySelectList').css('max-height', 'none')
                    } else $('#categorySelectList').css('max-height', viewportSpace)
                }
            };
            $(window).resize(function () {
                scaleDropDown()
            });
            $('#categorySelect').click(function () {
                thiz.fblockActive(this, '.searchmain');
                var $selectList = $('#categorySelectList');
                $selectList.toggle();
                $selectList.is(':visible') ? $(document).trigger('hidedropdowns') : '';
                scaleDropDown();
                return false
            });
            $('.categorySelectA1, .categorySelectA2').click(function () {
                $('#categorySelectList').hide();
                $('#categorySelectHidden').val($(this).data('id'));
                $('#categorySelectName').text($(this).data('name'));
                $('#categorySelect').addClass('data-inserted');
                $("#categorySelect").removeClass(function (index, css) {
                    return (css.match(/\ba-category-\S+/g) || []).join(' ')
                });
                $('#categorySelect').addClass($(this).data('icon_class'));
                return false
            });
            $(document).bind('click', function (e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass('categorySelectList'))$('#categorySelectList').hide()
            });
            var timer = null;

            function getFacets() {
                if (timer != null)window.clearTimeout(timer);
                timer = window.setTimeout(function () {
                    var $input = $('input#headerSearch'), oldValue = $input.val();
                    if ($input.val() == $input.attr('defaultval'))$input.val('');
                    $.post(www_base_ajax + '/searchfacets/', $('#searchmain').serialize(), function (data) {
                        var categoriesStats = data.data;
                        $('.categorySelectA1, .categorySelectA2').find('span.counter').each(function () {
                            if (categoriesStats[$(this).data('id')]) {
                                $(this).html(categoriesStats[$(this).data('id')]).removeClass('hidden')
                            } else $(this).addClass('hidden')
                        })
                    });
                    $input.val(oldValue)
                }, 600)
            };
            $('body').live('geo-suggest-selected', function (e) {
                getFacets()
            });
            $('select#distanceSelect, #cityField').change(function () {
                getFacets()
            });
            $('input#headerSearch').blur(function () {
                getFacets()
            })
        }
    }, initClickReport: function () {
        var thiz = this;
        if (useExternalScripts) {
            $('#categories-main').find('[data-click-report]').on('click', function (e) {
                var code = '', category = '', codeM = 'd', content = '';
                if (thiz.isMobile())codeM = 'm';
                content = $(this).data('content');
                if (content === undefined)content = 'params_' + $(this).data('category');
                if (sitecode == 'otomotopl')switch (content) {
                    case'params_29':
                        code = 'cars';
                        category = 'osobowe';
                        break;
                    case'params_1':
                        code = 'agro';
                        category = 'rolnicze';
                        break;
                    case'params_73':
                        code = 'utility';
                        category = 'dostawcze';
                        break;
                    case'params_57':
                        code = 'track';
                        category = 'ciężarowe';
                        break;
                    case'params_65':
                        code = 'motorbike';
                        category = 'motocykle';
                        break;
                    case'params_31':
                        code = 'construction';
                        category = 'budowlane';
                        break;
                    case'params_9':
                        code = 'traile';
                        category = 'przyczepy';
                        break;
                    default:
                        code = 'parts'
                }
                ;
                if (sitecode == 'autovitro')switch (content) {
                    case'params_29':
                        code = 'cars';
                        category = 'cars';
                        break;
                    case'params_1':
                        code = 'agro';
                        category = 'agro';
                        break;
                    case'params_81':
                        code = 'utility';
                        category = 'utility';
                        break;
                    case'params_57':
                        code = 'track';
                        category = 'track';
                        break;
                    case'params_65':
                        code = 'motorbike';
                        category = 'motorbike';
                        break;
                    case'params_31':
                        code = 'construction';
                        category = 'construction';
                        break;
                    case'params_9':
                        code = 'traile';
                        category = 'traile';
                        break;
                    default:
                        code = 'parts';
                        category = 'parts'
                }
                ;
                code = 'menu_' + code + '_' + codeM;
                dataLayer.push({event: code});
                if (category != '') {
                    var xt_temp = xtcustom;
                    xt_temp.category = category;
                    xt_temp.page_name = xt_temp.action_type = 'homepage';
                    xt_med('F', '', xt_temp.page_name + '&stc=' + escape(JSON.stringify(xt_temp)))
                }
            });
            $('.offer-big').on('click', function (e) {
                var code;
                if (thiz.isMobile()) {
                    code = 'day_offer_m'
                } else code = 'day_offer_d';
                dataLayer.push({event: code})
            });
            $('.offers-mid').find('.item-box').on('click', function (e) {
                var code;
                if (thiz.isMobile()) {
                    code = 'promoted_offer_m'
                } else code = 'promoted_offer_d';
                dataLayer.push({event: code})
            });
            $('.offers-small').on('click', function (e) {
                var code;
                if (thiz.isMobile()) {
                    code = 'promoted_ads_horizontal_m'
                } else code = 'promoted_ads_horizontal_d';
                dataLayer.push({event: code})
            });
            $('#facebook').on('click', function (e) {
                var code;
                if (thiz.isMobile()) {
                    code = 'facebook_m'
                } else code = 'facebook_d';
                dataLayer.push({event: code})
            });
            $('#youtube').on('click', function (e) {
                var code;
                if (thiz.isMobile()) {
                    code = 'youtube_m'
                } else code = 'youtube_d';
                dataLayer.push({event: code})
            });
            $('#blog').on('click', function (e) {
                var code;
                if (thiz.isMobile()) {
                    code = 'blog_m'
                } else code = 'blog_d';
                dataLayer.push({event: code})
            });
            $('.full-branding').on('click', function (e) {
                var code;
                if (thiz.isMobile()) {
                    code = 'showcase_m'
                } else code = 'showcase_d';
                dataLayer.push({event: code})
            });
            $('#popular').find('li > a').on('click', function (e) {
                var code;
                if (thiz.isMobile()) {
                    code = 'click_main_popular_make_m'
                } else code = 'click_main_popular_make_d';
                dataLayer.push({event: code})
            });
            $('.infobar-3in1, .box-3in1').on('click', function (e) {
                dataLayer.push({event: '3in1home'})
            });
            $('.box-mobile').on('click', function (e) {
                dataLayer.push({event: 'bottom_left'})
            })
        }
    }, initHomepageSearch: function () {
        if ("SearchArea"in window)new SearchArea()
    }, initTabsNavigation: function () {
        var $tabItem = $('.om-tabs li'), $tabContent = $('.om-tabs-content'), $currentTab = null;
        $tabItem.not('.ignore').click(function (e) {
            e.preventDefault();
            var $this = $(this), $tabSelected = $this.data('content'), $contentSelected = $tabContent.find('li[data-content="' + $tabSelected + '"]');
            if ($currentTab !== $tabSelected) {
                $currentTab = $tabSelected;
                $tabItem.removeClass('selected');
                $this.addClass('selected');
                $contentSelected.addClass('selected').siblings('li').removeClass('selected');
                $tabContent.show();
                $('button[type="submit"]', '.om-search-box').addClass('transparent');
                $('button[type="submit"]', '.advanced-search').removeClass('transparent');
                $(window).trigger("searchTabs.onTabShow", [$tabSelected, $contentSelected, $tabContent, $tabItem])
            }
        });
        var $firstTab = $tabItem.first(), $tabSelected = $firstTab.data('content'), $contentSelected = $tabContent.find('li[data-content="' + $tabSelected + '"]');
        $(window).trigger("searchTabs.onTabShow", [$tabSelected, $contentSelected, $tabContent, $tabItem]);
        $(window).on("searchTabs.onTabShow", function bindFocusToTabShow(event, $tabSelected, $contentSelected, $tabContent, $tabItem) {
            $('.queryfield', '.om-search-box').focus(function () {
                $('button[type="submit"]', '.om-search-box').removeClass('transparent');
                $('button[type="submit"]', '.advanced-search').addClass('transparent');
                $($tabContent, '.categories-main').hide();
                $tabItem.removeClass('selected')
            })
        })
    }, initWelcomeInfo: function () {
        var $welcomeInfo = $('.om-welcome-info');
        if ($.cookie('welcomeInfoSeen') !== null) {
            $welcomeInfo.addClass('collapsed').removeClass('hidden')
        } else {
            $welcomeInfo.removeClass('hidden');
            $welcomeInfo.find('.el').each(function (i) {
                var $el = $(this);
                setTimeout(function () {
                    $el.addClass('animated-1 bounceInDown')
                }, i * 300)
            });
            window.setTimeout(function () {
                $('.om-svg-circle').addClass('animated-2 fadeInRight')
            }, 2e3);
            $('.om-welcome-close', $welcomeInfo).on('click', function (e) {
                e.preventDefault();
                $.cookie('welcomeInfoSeen', '1', {expires: 30, path: '/', domain: '.' + session_domain});
                $welcomeInfo.animate({height: 0, minHeight: 56}, 300, function () {
                    $welcomeInfo.addClass('collapsed');
                    $('.text-left', $welcomeInfo).addClass('animated-2 fadeInLeft');
                    $('.text-right', $welcomeInfo).addClass('animated-2 fadeInRight')
                })
            })
        }
    }, initSpecialInputs: function () {
        var thiz = this, isMobileOrTabletViewport = document.body.clientWidth <= 1024

        function convertToSelect2Elements($contentSelected) {
            if (!$contentSelected.data("special-input-bound")) {
                $('.fuel_type_box', $contentSelected).click(function selectFuelType() {
                    if ($(this).data('key')) {
                        $('#fuel_type').removeAttr('disabled');
                        $('#fuel_type').val($(this).data('key'))
                    } else {
                        $('#fuel_type').val('');
                        $('#fuel_type').attr('disabled', 'disabled')
                    }
                    ;
                    $(this).parent().find('.fuel_type_box').removeClass("active");
                    $(this).addClass("active")
                });
                var inputElements = $('.filter-item', $contentSelected);
                $('input[type=number]', inputElements).each(function (i, e) {
                    var fblock = $(e).closest('.fblock'), key = fblock.data('key'), catID = $(e).parents("[data-category]").data("category"), ranges = thiz.getSearchRanges(key, catID);
                    if (typeof ranges != 'undefined' && ranges.values.length)$(e).suggest({
                        useNativeSelect: isMobileOrTabletViewport,
                        suggestions: ranges.values,
                        numberThousandsSeparator: key == 'year' ? '' : ' ',
                        numberSuffix: (ranges.label ? ' ' + ranges.label : ''),
                        inputTo: ($(this).attr('name').indexOf(':from') > -1) ? fblock.find('input[name="' + $(this).attr('name').replace(':from', ':to') + '"]') : null,
                        inputFrom: ($(this).attr('name').indexOf(':to') > -1) ? fblock.find('input[name="' + $(this).attr('name').replace(':to', ':from') + '"]') : null
                    })
                });
                $('select:not(#searchFormCatID),input[type=number],input[type="text"]', inputElements).change(function () {
                    var $this = $(this);
                    $this.closest('.filter-item').toggleClass('active', $this.val() ? true : false)
                });
                $contentSelected.data("special-input-bound", true)
            }
        };
        $(window).on("searchTabs.onTabShow", function bindSpecialInputsToTabShow(e, $tabSelected, $contentSelected) {
            convertToSelect2Elements($contentSelected)
        });
        var $firstTabContent = $(".search-area__tab-content").first();
        convertToSelect2Elements($firstTabContent)
    }, getSearchRanges: function (key, catID) {
        for (var x in window.searchRanges) {
            var ranges = window.searchRanges[x];
            if (ranges.k[key] && ranges.c[catID]) {
                var rangeKey = 'v', label = ranges.s[key];
                if ((key == 'price') || (key == 'salary')) {
                    var currencySymbol = this.getCurrentCurrency(catID);
                    if (ranges['v_' + currencySymbol.code])rangeKey = 'v_' + currencySymbol.code;
                    if (currencySymbol.symbol)label = currencySymbol.symbol
                }
                ;
                var values = ranges[rangeKey].split(',');
                return {
                    values: values.map(function (v) {
                        return parseInt(v.replace(' ', ''))
                    }), label: label
                }
            }
        }
    }, getCurrentCurrency: function (category_id) {
        var currencySymbol = window.defaultCurrency, currencyCode;
        if ("currencies"in window && currencySymbol in window.currencies)var currencyCode = window.currencies[window.defaultCurrency]['symbol'];
        return {symbol: currencySymbol, code: currencyCode}
    }, initAdsTitleHandler: function () {
        if ("AdsTitleHandler"in window)AdsTitleHandler.init()
    }, initGptStickyClose: function () {
        $(window).on("googletag.onReady", function () {
            googletag.pubads().addEventListener('impressionViewable', function (event) {
                $(".sticky-gpt-close").show().bind("click", function () {
                    $("#div-gpt-rwd-homepage-billboard").remove()
                })
            })
        });
        if (typeof googletag !== "undefined") {
            googletag.cmd.push(function () {
                $(window).trigger("googletag.onReady")
            })
        } else $(window).on("load", function () {
            if (typeof googletag !== "undefined")googletag.cmd.push(function () {
                $(window).trigger("googletag.onReady")
            })
        })
    }, initVideoPlayer: function () {
        if ("VideoControl"in window)VideoControl.init()
    }, initHomeBanner: function () {
        if ("HomeBanner"in window)HomeBanner.init()
    }
});
$().ready(function () {
    new IndexClass()
});
(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory)
    } else if (typeof exports === 'object') {
        module.exports = factory(require('jquery'))
    } else factory(root.jQuery)
}(this, function ($) {
    $.transit = {
        version: "0.9.12",
        propertyMap: {
            marginLeft: 'margin',
            marginRight: 'margin',
            marginBottom: 'margin',
            marginTop: 'margin',
            paddingLeft: 'padding',
            paddingRight: 'padding',
            paddingBottom: 'padding',
            paddingTop: 'padding'
        },
        enabled: true,
        useTransitionEnd: false
    };
    var div = document.createElement('div'), support = {}

    function getVendorPropertyName(prop) {
        if (prop in div.style)return prop;
        var prefixes = ['Moz', 'Webkit', 'O', 'ms'], prop_ = prop.charAt(0).toUpperCase() + prop.substr(1);
        for (var i = 0; i < prefixes.length; ++i) {
            var vendorProp = prefixes[i] + prop_;
            if (vendorProp in div.style)return vendorProp
        }
    }

    function checkTransform3dSupport() {
        div.style[support.transform] = '';
        div.style[support.transform] = 'rotateY(90deg)';
        return div.style[support.transform] !== ''
    };
    var isChrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
    support.transition = getVendorPropertyName('transition');
    support.transitionDelay = getVendorPropertyName('transitionDelay');
    support.transform = getVendorPropertyName('transform');
    support.transformOrigin = getVendorPropertyName('transformOrigin');
    support.filter = getVendorPropertyName('Filter');
    support.transform3d = checkTransform3dSupport();
    var eventNames = {
        transition: 'transitionend',
        MozTransition: 'transitionend',
        OTransition: 'oTransitionEnd',
        WebkitTransition: 'webkitTransitionEnd',
        msTransition: 'MSTransitionEnd'
    }, transitionEnd = support.transitionEnd = eventNames[support.transition] || null;
    for (var key in support)if (support.hasOwnProperty(key) && typeof $.support[key] === 'undefined')$.support[key] = support[key];
    div = null;
    $.cssEase = {
        _default: 'ease',
        'in': 'ease-in',
        out: 'ease-out',
        'in-out': 'ease-in-out',
        snap: 'cubic-bezier(0,1,.5,1)',
        easeInCubic: 'cubic-bezier(.550,.055,.675,.190)',
        easeOutCubic: 'cubic-bezier(.215,.61,.355,1)',
        easeInOutCubic: 'cubic-bezier(.645,.045,.355,1)',
        easeInCirc: 'cubic-bezier(.6,.04,.98,.335)',
        easeOutCirc: 'cubic-bezier(.075,.82,.165,1)',
        easeInOutCirc: 'cubic-bezier(.785,.135,.15,.86)',
        easeInExpo: 'cubic-bezier(.95,.05,.795,.035)',
        easeOutExpo: 'cubic-bezier(.19,1,.22,1)',
        easeInOutExpo: 'cubic-bezier(1,0,0,1)',
        easeInQuad: 'cubic-bezier(.55,.085,.68,.53)',
        easeOutQuad: 'cubic-bezier(.25,.46,.45,.94)',
        easeInOutQuad: 'cubic-bezier(.455,.03,.515,.955)',
        easeInQuart: 'cubic-bezier(.895,.03,.685,.22)',
        easeOutQuart: 'cubic-bezier(.165,.84,.44,1)',
        easeInOutQuart: 'cubic-bezier(.77,0,.175,1)',
        easeInQuint: 'cubic-bezier(.755,.05,.855,.06)',
        easeOutQuint: 'cubic-bezier(.23,1,.32,1)',
        easeInOutQuint: 'cubic-bezier(.86,0,.07,1)',
        easeInSine: 'cubic-bezier(.47,0,.745,.715)',
        easeOutSine: 'cubic-bezier(.39,.575,.565,1)',
        easeInOutSine: 'cubic-bezier(.445,.05,.55,.95)',
        easeInBack: 'cubic-bezier(.6,-.28,.735,.045)',
        easeOutBack: 'cubic-bezier(.175, .885,.32,1.275)',
        easeInOutBack: 'cubic-bezier(.68,-.55,.265,1.55)'
    };
    $.cssHooks['transit:transform'] = {
        get: function (elem) {
            return $(elem).data('transform') || new Transform()
        }, set: function (elem, v) {
            var value = v;
            if (!(value instanceof Transform))value = new Transform(value);
            if (support.transform === 'WebkitTransform' && !isChrome) {
                elem.style[support.transform] = value.toString(true)
            } else elem.style[support.transform] = value.toString();
            $(elem).data('transform', value)
        }
    };
    $.cssHooks.transform = {set: $.cssHooks['transit:transform'].set};
    $.cssHooks.filter = {
        get: function (elem) {
            return elem.style[support.filter]
        }, set: function (elem, value) {
            elem.style[support.filter] = value
        }
    };
    if ($.fn.jquery < "1.8") {
        $.cssHooks.transformOrigin = {
            get: function (elem) {
                return elem.style[support.transformOrigin]
            }, set: function (elem, value) {
                elem.style[support.transformOrigin] = value
            }
        };
        $.cssHooks.transition = {
            get: function (elem) {
                return elem.style[support.transition]
            }, set: function (elem, value) {
                elem.style[support.transition] = value
            }
        }
    }
    ;
    registerCssHook('scale');
    registerCssHook('scaleX');
    registerCssHook('scaleY');
    registerCssHook('translate');
    registerCssHook('rotate');
    registerCssHook('rotateX');
    registerCssHook('rotateY');
    registerCssHook('rotate3d');
    registerCssHook('perspective');
    registerCssHook('skewX');
    registerCssHook('skewY');
    registerCssHook('x', true);
    registerCssHook('y', true)
    function Transform(str) {
        if (typeof str === 'string')this.parse(str);
        return this
    };
    Transform.prototype = {
        setFromString: function (prop, val) {
            var args = (typeof val === 'string') ? val.split(',') : (val.constructor === Array) ? val : [val];
            args.unshift(prop);
            Transform.prototype.set.apply(this, args)
        }, set: function (prop) {
            var args = Array.prototype.slice.apply(arguments, [1]);
            if (this.setter[prop]) {
                this.setter[prop].apply(this, args)
            } else this[prop] = args.join(',')
        }, get: function (prop) {
            if (this.getter[prop]) {
                return this.getter[prop].apply(this)
            } else return this[prop] || 0
        }, setter: {
            rotate: function (theta) {
                this.rotate = unit(theta, 'deg')
            }, rotateX: function (theta) {
                this.rotateX = unit(theta, 'deg')
            }, rotateY: function (theta) {
                this.rotateY = unit(theta, 'deg')
            }, scale: function (x, y) {
                if (y === undefined)y = x;
                this.scale = x + "," + y
            }, skewX: function (x) {
                this.skewX = unit(x, 'deg')
            }, skewY: function (y) {
                this.skewY = unit(y, 'deg')
            }, perspective: function (dist) {
                this.perspective = unit(dist, 'px')
            }, x: function (x) {
                this.set('translate', x, null)
            }, y: function (y) {
                this.set('translate', null, y)
            }, translate: function (x, y) {
                if (this._translateX === undefined)this._translateX = 0;
                if (this._translateY === undefined)this._translateY = 0;
                if (x !== null && x !== undefined)this._translateX = unit(x, 'px');
                if (y !== null && y !== undefined)this._translateY = unit(y, 'px');
                this.translate = this._translateX + "," + this._translateY
            }
        }, getter: {
            x: function () {
                return this._translateX || 0
            }, y: function () {
                return this._translateY || 0
            }, scale: function () {
                var s = (this.scale || "1,1").split(',');
                if (s[0])s[0] = parseFloat(s[0]);
                if (s[1])s[1] = parseFloat(s[1]);
                return (s[0] === s[1]) ? s[0] : s
            }, rotate3d: function () {
                var s = (this.rotate3d || "0,0,0,0deg").split(',');
                for (var i = 0; i <= 3; ++i)if (s[i])s[i] = parseFloat(s[i]);
                if (s[3])s[3] = unit(s[3], 'deg');
                return s
            }
        }, parse: function (str) {
            var self = this;
            str.replace(/([a-zA-Z0-9]+)\((.*?)\)/g, function (x, prop, val) {
                self.setFromString(prop, val)
            })
        }, toString: function (use3d) {
            var re = [];
            for (var i in this)if (this.hasOwnProperty(i)) {
                if ((!support.transform3d) && ((i === 'rotateX') || (i === 'rotateY') || (i === 'perspective') || (i === 'transformOrigin')))continue;
                if (i[0] !== '_')if (use3d && (i === 'scale')) {
                    re.push(i + "3d(" + this[i] + ",1)")
                } else if (use3d && (i === 'translate')) {
                    re.push(i + "3d(" + this[i] + ",0)")
                } else re.push(i + "(" + this[i] + ")")
            }
            ;
            return re.join(" ")
        }
    }
    function callOrQueue(self, queue, fn) {
        if (queue === true) {
            self.queue(fn)
        } else if (queue) {
            self.queue(queue, fn)
        } else self.each(function () {
            fn.call(this)
        })
    }

    function getProperties(props) {
        var re = [];
        $.each(props, function (key) {
            key = $.camelCase(key);
            key = $.transit.propertyMap[key] || $.cssProps[key] || key;
            key = uncamel(key);
            if (support[key])key = uncamel(support[key]);
            if ($.inArray(key, re) === -1)re.push(key)
        });
        return re
    }

    function getTransition(properties, duration, easing, delay) {
        var props = getProperties(properties);
        if ($.cssEase[easing])easing = $.cssEase[easing];
        var attribs = '' + toMS(duration) + ' ' + easing;
        if (parseInt(delay, 10) > 0)attribs += ' ' + toMS(delay);
        var transitions = [];
        $.each(props, function (i, name) {
            transitions.push(name + ' ' + attribs)
        });
        return transitions.join(', ')
    };
    $.fn.transition = $.fn.transit = function (properties, duration, easing, callback) {
        var self = this, delay = 0, queue = true, theseProperties = $.extend(true, {}, properties);
        if (typeof duration === 'function') {
            callback = duration;
            duration = undefined
        }
        ;
        if (typeof duration === 'object') {
            easing = duration.easing;
            delay = duration.delay || 0;
            queue = typeof duration.queue === "undefined" ? true : duration.queue;
            callback = duration.complete;
            duration = duration.duration
        }
        ;
        if (typeof easing === 'function') {
            callback = easing;
            easing = undefined
        }
        ;
        if (typeof theseProperties.easing !== 'undefined') {
            easing = theseProperties.easing;
            delete theseProperties.easing
        }
        ;
        if (typeof theseProperties.duration !== 'undefined') {
            duration = theseProperties.duration;
            delete theseProperties.duration
        }
        ;
        if (typeof theseProperties.complete !== 'undefined') {
            callback = theseProperties.complete;
            delete theseProperties.complete
        }
        ;
        if (typeof theseProperties.queue !== 'undefined') {
            queue = theseProperties.queue;
            delete theseProperties.queue
        }
        ;
        if (typeof theseProperties.delay !== 'undefined') {
            delay = theseProperties.delay;
            delete theseProperties.delay
        }
        ;
        if (typeof duration === 'undefined')duration = $.fx.speeds._default;
        if (typeof easing === 'undefined')easing = $.cssEase._default;
        duration = toMS(duration);
        var transitionValue = getTransition(theseProperties, duration, easing, delay), work = $.transit.enabled && support.transition, i = work ? (parseInt(duration, 10) + parseInt(delay, 10)) : 0;
        if (i === 0) {
            var fn = function (next) {
                self.css(theseProperties);
                if (callback)callback.apply(self);
                if (next)next()
            };
            callOrQueue(self, queue, fn);
            return self
        }
        ;
        var oldTransitions = {}, run = function (nextCall) {
            var bound = false, cb = function () {
                if (bound)self.unbind(transitionEnd, cb);
                if (i > 0)self.each(function () {
                    this.style[support.transition] = (oldTransitions[this] || null)
                });
                if (typeof callback === 'function')callback.apply(self);
                if (typeof nextCall === 'function')nextCall()
            };
            if ((i > 0) && transitionEnd && ($.transit.useTransitionEnd)) {
                bound = true;
                self.bind(transitionEnd, cb)
            } else window.setTimeout(cb, i);
            self.each(function () {
                if (i > 0)this.style[support.transition] = transitionValue;
                $(this).css(theseProperties)
            })
        }, deferredRun = function (next) {
            this.offsetWidth = this.offsetWidth;
            run(next)
        };
        callOrQueue(self, queue, deferredRun);
        return this
    }
    function registerCssHook(prop, isPixels) {
        if (!isPixels)$.cssNumber[prop] = true;
        $.transit.propertyMap[prop] = support.transform;
        $.cssHooks[prop] = {
            get: function (elem) {
                var t = $(elem).css('transit:transform');
                return t.get(prop)
            }, set: function (elem, value) {
                var t = $(elem).css('transit:transform');
                t.setFromString(prop, value);
                $(elem).css({'transit:transform': t})
            }
        }
    }

    function uncamel(str) {
        return str.replace(/([A-Z])/g, function (letter) {
            return '-' + letter.toLowerCase()
        })
    }

    function unit(i, units) {
        if ((typeof i === "string") && (!i.match(/^[\-0-9\.]+$/))) {
            return i
        } else return "" + i + units
    }

    function toMS(duration) {
        var i = duration;
        if (typeof i === 'string' && (!i.match(/^[\-0-9\.]+/)))i = $.fx.speeds[i] || $.fx.speeds._default;
        return unit(i, 'ms')
    };
    $.transit.getTransitionValue = getTransition;
    return $
}));
var TouchEventHandler = function (el) {
    var touchsurface = el, dir, swipeType, startX, startY, distX, distY, threshold = 150, restraint = 100, allowedTime = 500, elapsedTime, startTime, methods = {};
    methods.bindTouchEvents = function (callback) {
        handletouch = callback || function foo(evt, dir, phase, swipetype, distance) {
            };
        touchsurface.addEventListener('touchstart', methods.touchStart);
        touchsurface.addEventListener('touchmove', methods.touchMove);
        touchsurface.addEventListener('touchend', methods.touchEnd)
    };
    methods.unbindTouchEvents = function () {
        touchsurface.removeEventListener('touchstart', methods.touchStart);
        touchsurface.removeEventListener('touchmove', methods.touchStart);
        touchsurface.removeEventListener('touchend', methods.touchStart)
    };
    methods.touchStart = function (e) {
        var touchobj = e.changedTouches[0];
        dir = 'none';
        swipeType = 'none';
        dist = 0;
        startX = touchobj.pageX;
        startY = touchobj.pageY;
        startTime = new Date().getTime();
        handletouch(e, 'none', 'start', swipeType, 0)
    };
    methods.touchMove = function (e) {
        var touchobj = e.changedTouches[0];
        distX = touchobj.pageX - startX;
        distY = touchobj.pageY - startY;
        if (Math.abs(distX) > Math.abs(distY)) {
            dir = (distX < 0) ? "left" : "right";
            handletouch(e, dir, 'move', swipeType, distX)
        } else {
            dir = (distY < 0) ? 'up' : 'down';
            handletouch(e, dir, 'move', swipeType, distY)
        }
    };
    methods.touchEnd = function (e) {
        var touchobj = e.changedTouches[0];
        elapsedTime = new Date().getTime() - startTime;
        if (elapsedTime <= allowedTime)if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint) {
            swipeType = dir
        } else if (Math.abs(distY) >= threshold && Math.abs(distX) <= restraint)swipeType = dir;
        handletouch(e, dir, 'end', swipeType, (dir == "left" || dir == "right") ? distX : distY)
    };
    return methods
};
var SearchArea = BaseClass.extend({
    init: function () {
        var $block = $(".js-search-area");
        if (!$block.length)return;
        if (this.inMobileMode()) {
            $block.find(".search-area__dropdown-tab").remove();
            this.carousel.init()
        } else $(window).on("resize", $.proxy(this.initCarouselWhenMobile, this))
    },
    inMobileMode: function () {
        return document.body.clientWidth <= 767
    },
    initCarouselWhenMobile: function () {
        if (this.inMobileMode())if (!$(".search-area__tabs-header").is(".js-carousel"))this.carousel.init()
    },
    carousel: {
        tabIndex: 0,
        $block: null,
        $tab: null,
        $tabItems: null,
        CSS_CLASSES: {TAB_ITEM: "js-tab-dynamic-item", TAB_WRAPPER: "js-tab-dynamic-wrapper"},
        updateMarkup: function () {
            this.$block.addClass("js-carousel");
            this.$tab.addClass(this.CSS_CLASSES.TAB_WRAPPER);
            this.$tabItems.addClass(this.CSS_CLASSES.TAB_ITEM);
            this.setTabIndex();
            this.setWrapperLeftPosition(document.body.clientWidth * this.tabIndex)
        },
        updateStyles: function () {
            this.$tab.css("width", (document.body.clientWidth * this.$tabItems.length) + "px");
            this.$tabItems.css("width", (document.body.clientWidth) + "px ")
        },
        addCSSRule: function (selector, rules) {
            var i = 0, sheet = document.styleSheets[i], index = 0;
            while (sheet == null && sheet.cssRules == null)sheet = document.styleSheets[i++];
            if (sheet.cssRules != null && sheet.cssRules.length > 0)index = sheet.cssRules.length - 1;
            if ("insertRule"in sheet) {
                sheet.insertRule(selector + "{" + rules + "}", index)
            } else if ("addRule"in sheet)sheet.addRule(selector, rules, index);
            return index
        },
        removeCSSRule: function (index) {
            var sheet = document.styleSheets[0];
            if ("deleteRule"in sheet) {
                sheet.deleteRule(index)
            } else if ("removeRule"in sheet)sheet.removeRule(index)
        },
        resetMarkup: function () {
            this.$tab.removeClass(this.CSS_CLASSES.TAB_WRAPPER);
            this.setWrapperLeftPosition(0);
            this.$tabItems.removeClass(this.CSS_CLASSES.TAB_ITEM)
        },
        unbindEvents: function () {
            TouchEventHandler(this.$tab[0]).unbindTouchEvents()
        },
        bindEvents: function () {
            $(".search-area__arrow", this.$block).on("click.carousel", this.click.bind(this));
            TouchEventHandler(this.$block[0]).bindTouchEvents(this.touch.bind(this));
            $(window).on("resize.carousel", this.refreshOrDestroy.bind(this))
        },
        touch: function (event, dir, phase, swipetype, distance) {
            if (!!~["left", "right"].indexOf(dir) && phase == "end" && this.inMobileMode())this.scrollTo(dir)
        },
        scrollTo: function (dir) {
            if (dir == "right" && this.tabIndex == 0) {
                return
            } else if (dir == "left" && this.tabIndex == this.$tabItems.length - 1)return;
            this.tabIndex = dir == "right" ? this.tabIndex - 1 : this.tabIndex + 1;
            this.setWrapperLeftPosition("-" + document.body.clientWidth * this.tabIndex);
            setTimeout(function () {
                $(this.$tabItems[this.tabIndex]).trigger("click")
            }.bind(this), 300)
        },
        setWrapperLeftPosition: function (left) {
            $(".search-area__tabs-header-inner-wrapper").css({x: "-" + document.body.clientWidth * this.tabIndex + "px"})
        },
        click: function (event) {
            var action = $(event.target).data("action");
            this.scrollTo(action == "next" ? "left" : "right")
        },
        refreshOrDestroy: function () {
            if (this.getStoredSize("width") == document.body.clientWidth)return;
            if (this.inMobileMode()) {
                this.updateMarkup();
                this.updateStyles()
            } else {
                this.resetMarkup();
                this.unbindEvents()
            }
            ;
            this.storeCurrentSizes()
        },
        inMobileMode: function () {
            return document.body.clientWidth <= 767
        },
        storeCurrentSizes: function () {
            this.$block.data("old-width", document.body.clientWidth)
        },
        getStoredSize: function (prop) {
            return this.$block.data("old-" + prop) || ""
        },
        setTabIndex: function () {
            this.tabIndex = this.$tabItems.filter(".selected").index()
        },
        init: function () {
            this.$block = $(".search-area__tabs-header"), this.$tab = $(".search-area__tabs-header-inner-wrapper", this.$block), this.$tabItems = $("li", this.$block);
            this.setTabIndex();
            this.updateMarkup();
            this.updateStyles();
            this.storeCurrentSizes();
            this.bindEvents()
        }
    }
});
var HomeBanner = (function () {
    "use strict"
    function init() {
        $("[data-homebanner-video]").on("click", forceOpenLink)
    }

    function forceOpenLink() {
        var href = $(this).siblings("[data-homebanner-link]").attr("href"), adPage = window.open(href, "adPage");
        adPage.focus()
    };
    return {init: init}
})();
var VideoControl = (function () {
    "use strict"
    function init() {
        if (!canPlayVideo())return;
        $("[data-custom-player] .video__object").each(function () {
            bindEvents(this);
            this.controls = false;
            toggleMute(this, true);
            this.play()
        })
    }

    function toggleMute(video, shouldMute) {
        video.muted = shouldMute;
        $(video).toggleClass("is-muted", shouldMute)
    }

    function canPlayVideo() {
        return !!(document.createElement('video')).canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, '')
    }

    function bindEvents(video) {
        var context = $(video).parent();
        $("[data-cmd='play']", context).on("click", play);
        $("[data-cmd='pause']", context).on("click", pause);
        $("[data-cmd='mute']", context).on("click", toggleVolume);
        $("[data-cmd='fullscreen']", context).on("click", goFullscreen);
        $("[data-cmd='repeat']", context).on("click", repeat);
        $(video).on("ended", showRepeat)
    }

    function play(e) {
        e.preventDefault();
        var video = getVideo(e);
        video.play();
        $(video).toggleClass("is-ended", false);
        $(video).toggleClass("is-paused", false)
    }

    function pause(e) {
        e.preventDefault();
        var video = getVideo(e);
        video.pause();
        $(video).toggleClass("is-paused", true)
    }

    function repeat(e) {
        play(e)
    }

    function showRepeat(e) {
        $(e.target).toggleClass("is-ended", true)
    }

    function toggleVolume(e) {
        e.preventDefault();
        var video = getVideo(e);
        toggleMute(video, !video.muted)
    }

    function goFullscreen(e) {
        e.preventDefault();
        var video = getVideo(e);
        if (video.requestFullscreen) {
            video.requestFullscreen()
        } else if (video.msRequestFullscreen) {
            video.msRequestFullscreen()
        } else if (video.mozRequestFullScreen) {
            video.mozRequestFullScreen()
        } else if (video.webkitRequestFullscreen)video.webkitRequestFullscreen()
    }

    function getVideo(event) {
        return $(event.target).parents(".video").find(".video__object")[0]
    };
    return {init: init}
})();
