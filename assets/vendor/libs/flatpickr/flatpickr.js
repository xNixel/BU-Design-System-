/*! For license information please see flatpickr.js.LICENSE.txt */
!(function () {
    var e = {
            4953: function (e) {
                e.exports = (function () {
                    "use strict";
                    var e = function () {
                        return (
                            (e =
                                Object.assign ||
                                function (e) {
                                    for (var n, t = 1, a = arguments.length; t < a; t++) for (var i in (n = arguments[t])) Object.prototype.hasOwnProperty.call(n, i) && (e[i] = n[i]);
                                    return e;
                                }),
                            e.apply(this, arguments)
                        );
                    };
                    function n() {
                        for (var e = 0, n = 0, t = arguments.length; n < t; n++) e += arguments[n].length;
                        var a = Array(e),
                            i = 0;
                        for (n = 0; n < t; n++) for (var o = arguments[n], r = 0, l = o.length; r < l; r++, i++) a[i] = o[r];
                        return a;
                    }
                    var t = ["onChange", "onClose", "onDayCreate", "onDestroy", "onKeyDown", "onMonthChange", "onOpen", "onParseConfig", "onReady", "onValueUpdate", "onYearChange", "onPreCalendarPosition"],
                        a = {
                            _disable: [],
                            allowInput: !1,
                            allowInvalidPreload: !1,
                            altFormat: "F j, Y",
                            altInput: !1,
                            altInputClass: "form-control input",
                            animate: "object" == typeof window && -1 === window.navigator.userAgent.indexOf("MSIE"),
                            ariaDateFormat: "F j, Y",
                            autoFillDefaultTime: !0,
                            clickOpens: !0,
                            closeOnSelect: !0,
                            conjunction: ", ",
                            dateFormat: "Y-m-d",
                            defaultHour: 12,
                            defaultMinute: 0,
                            defaultSeconds: 0,
                            disable: [],
                            disableMobile: !1,
                            enableSeconds: !1,
                            enableTime: !1,
                            errorHandler: function (e) {
                                return "undefined" != typeof console && console.warn(e);
                            },
                            getWeek: function (e) {
                                var n = new Date(e.getTime());
                                n.setHours(0, 0, 0, 0), n.setDate(n.getDate() + 3 - ((n.getDay() + 6) % 7));
                                var t = new Date(n.getFullYear(), 0, 4);
                                return 1 + Math.round(((n.getTime() - t.getTime()) / 864e5 - 3 + ((t.getDay() + 6) % 7)) / 7);
                            },
                            hourIncrement: 1,
                            ignoredFocusElements: [],
                            inline: !1,
                            locale: "default",
                            minuteIncrement: 5,
                            mode: "single",
                            monthSelectorType: "dropdown",
                            nextArrow:
                                "<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 17 17'><g></g><path d='M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z' /></svg>",
                            noCalendar: !1,
                            now: new Date(),
                            onChange: [],
                            onClose: [],
                            onDayCreate: [],
                            onDestroy: [],
                            onKeyDown: [],
                            onMonthChange: [],
                            onOpen: [],
                            onParseConfig: [],
                            onReady: [],
                            onValueUpdate: [],
                            onYearChange: [],
                            onPreCalendarPosition: [],
                            plugins: [],
                            position: "auto",
                            positionElement: void 0,
                            prevArrow:
                                "<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 17 17'><g></g><path d='M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z' /></svg>",
                            shorthandCurrentMonth: !1,
                            showMonths: 1,
                            static: !1,
                            time_24hr: !1,
                            weekNumbers: !1,
                            wrap: !1,
                        },
                        i = {
                            weekdays: { shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], longhand: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"] },
                            months: {
                                shorthand: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                longhand: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                            },
                            daysInMonth: [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
                            firstDayOfWeek: 0,
                            ordinal: function (e) {
                                var n = e % 100;
                                if (n > 3 && n < 21) return "th";
                                switch (n % 10) {
                                    case 1:
                                        return "st";
                                    case 2:
                                        return "nd";
                                    case 3:
                                        return "rd";
                                    default:
                                        return "th";
                                }
                            },
                            rangeSeparator: " to ",
                            weekAbbreviation: "Wk",
                            scrollTitle: "Scroll to increment",
                            toggleTitle: "Click to toggle",
                            amPM: ["AM", "PM"],
                            yearAriaLabel: "Year",
                            monthAriaLabel: "Month",
                            hourAriaLabel: "Hour",
                            minuteAriaLabel: "Minute",
                            time_24hr: !1,
                        },
                        o = function (e, n) {
                            return void 0 === n && (n = 2), ("000" + e).slice(-1 * n);
                        },
                        r = function (e) {
                            return !0 === e ? 1 : 0;
                        };
                    function l(e, n) {
                        var t;
                        return function () {
                            var a = this,
                                i = arguments;
                            clearTimeout(t),
                                (t = setTimeout(function () {
                                    return e.apply(a, i);
                                }, n));
                        };
                    }
                    var c = function (e) {
                        return e instanceof Array ? e : [e];
                    };
                    function s(e, n, t) {
                        if (!0 === t) return e.classList.add(n);
                        e.classList.remove(n);
                    }
                    function d(e, n, t) {
                        var a = window.document.createElement(e);
                        return (n = n || ""), (t = t || ""), (a.className = n), void 0 !== t && (a.textContent = t), a;
                    }
                    function u(e) {
                        for (; e.firstChild; ) e.removeChild(e.firstChild);
                    }
                    function f(e, n) {
                        return n(e) ? e : e.parentNode ? f(e.parentNode, n) : void 0;
                    }
                    function m(e, n) {
                        var t = d("div", "numInputWrapper"),
                            a = d("input", "numInput " + e),
                            i = d("span", "arrowUp"),
                            o = d("span", "arrowDown");
                        if ((-1 === navigator.userAgent.indexOf("MSIE 9.0") ? (a.type = "number") : ((a.type = "text"), (a.pattern = "\\d*")), void 0 !== n)) for (var r in n) a.setAttribute(r, n[r]);
                        return t.appendChild(a), t.appendChild(i), t.appendChild(o), t;
                    }
                    function g(e) {
                        try {
                            return "function" == typeof e.composedPath ? e.composedPath()[0] : e.target;
                        } catch (n) {
                            return e.target;
                        }
                    }
                    var p = function () {},
                        h = function (e, n, t) {
                            return t.months[n ? "shorthand" : "longhand"][e];
                        },
                        v = {
                            D: p,
                            F: function (e, n, t) {
                                e.setMonth(t.months.longhand.indexOf(n));
                            },
                            G: function (e, n) {
                                e.setHours((e.getHours() >= 12 ? 12 : 0) + parseFloat(n));
                            },
                            H: function (e, n) {
                                e.setHours(parseFloat(n));
                            },
                            J: function (e, n) {
                                e.setDate(parseFloat(n));
                            },
                            K: function (e, n, t) {
                                e.setHours((e.getHours() % 12) + 12 * r(new RegExp(t.amPM[1], "i").test(n)));
                            },
                            M: function (e, n, t) {
                                e.setMonth(t.months.shorthand.indexOf(n));
                            },
                            S: function (e, n) {
                                e.setSeconds(parseFloat(n));
                            },
                            U: function (e, n) {
                                return new Date(1e3 * parseFloat(n));
                            },
                            W: function (e, n, t) {
                                var a = parseInt(n),
                                    i = new Date(e.getFullYear(), 0, 2 + 7 * (a - 1), 0, 0, 0, 0);
                                return i.setDate(i.getDate() - i.getDay() + t.firstDayOfWeek), i;
                            },
                            Y: function (e, n) {
                                e.setFullYear(parseFloat(n));
                            },
                            Z: function (e, n) {
                                return new Date(n);
                            },
                            d: function (e, n) {
                                e.setDate(parseFloat(n));
                            },
                            h: function (e, n) {
                                e.setHours((e.getHours() >= 12 ? 12 : 0) + parseFloat(n));
                            },
                            i: function (e, n) {
                                e.setMinutes(parseFloat(n));
                            },
                            j: function (e, n) {
                                e.setDate(parseFloat(n));
                            },
                            l: p,
                            m: function (e, n) {
                                e.setMonth(parseFloat(n) - 1);
                            },
                            n: function (e, n) {
                                e.setMonth(parseFloat(n) - 1);
                            },
                            s: function (e, n) {
                                e.setSeconds(parseFloat(n));
                            },
                            u: function (e, n) {
                                return new Date(parseFloat(n));
                            },
                            w: p,
                            y: function (e, n) {
                                e.setFullYear(2e3 + parseFloat(n));
                            },
                        },
                        D = {
                            D: "",
                            F: "",
                            G: "(\\d\\d|\\d)",
                            H: "(\\d\\d|\\d)",
                            J: "(\\d\\d|\\d)\\w+",
                            K: "",
                            M: "",
                            S: "(\\d\\d|\\d)",
                            U: "(.+)",
                            W: "(\\d\\d|\\d)",
                            Y: "(\\d{4})",
                            Z: "(.+)",
                            d: "(\\d\\d|\\d)",
                            h: "(\\d\\d|\\d)",
                            i: "(\\d\\d|\\d)",
                            j: "(\\d\\d|\\d)",
                            l: "",
                            m: "(\\d\\d|\\d)",
                            n: "(\\d\\d|\\d)",
                            s: "(\\d\\d|\\d)",
                            u: "(.+)",
                            w: "(\\d\\d|\\d)",
                            y: "(\\d{2})",
                        },
                        b = {
                            Z: function (e) {
                                return e.toISOString();
                            },
                            D: function (e, n, t) {
                                return n.weekdays.shorthand[b.w(e, n, t)];
                            },
                            F: function (e, n, t) {
                                return h(b.n(e, n, t) - 1, !1, n);
                            },
                            G: function (e, n, t) {
                                return o(b.h(e, n, t));
                            },
                            H: function (e) {
                                return o(e.getHours());
                            },
                            J: function (e, n) {
                                return void 0 !== n.ordinal ? e.getDate() + n.ordinal(e.getDate()) : e.getDate();
                            },
                            K: function (e, n) {
                                return n.amPM[r(e.getHours() > 11)];
                            },
                            M: function (e, n) {
                                return h(e.getMonth(), !0, n);
                            },
                            S: function (e) {
                                return o(e.getSeconds());
                            },
                            U: function (e) {
                                return e.getTime() / 1e3;
                            },
                            W: function (e, n, t) {
                                return t.getWeek(e);
                            },
                            Y: function (e) {
                                return o(e.getFullYear(), 4);
                            },
                            d: function (e) {
                                return o(e.getDate());
                            },
                            h: function (e) {
                                return e.getHours() % 12 ? e.getHours() % 12 : 12;
                            },
                            i: function (e) {
                                return o(e.getMinutes());
                            },
                            j: function (e) {
                                return e.getDate();
                            },
                            l: function (e, n) {
                                return n.weekdays.longhand[e.getDay()];
                            },
                            m: function (e) {
                                return o(e.getMonth() + 1);
                            },
                            n: function (e) {
                                return e.getMonth() + 1;
                            },
                            s: function (e) {
                                return e.getSeconds();
                            },
                            u: function (e) {
                                return e.getTime();
                            },
                            w: function (e) {
                                return e.getDay();
                            },
                            y: function (e) {
                                return String(e.getFullYear()).substring(2);
                            },
                        },
                        w = function (e) {
                            var n = e.config,
                                t = void 0 === n ? a : n,
                                o = e.l10n,
                                r = void 0 === o ? i : o,
                                l = e.isMobile,
                                c = void 0 !== l && l;
                            return function (e, n, a) {
                                var i = a || r;
                                return void 0 === t.formatDate || c
                                    ? n
                                          .split("")
                                          .map(function (n, a, o) {
                                              return b[n] && "\\" !== o[a - 1] ? b[n](e, i, t) : "\\" !== n ? n : "";
                                          })
                                          .join("")
                                    : t.formatDate(e, n, i);
                            };
                        },
                        M = function (e) {
                            var n = e.config,
                                t = void 0 === n ? a : n,
                                o = e.l10n,
                                r = void 0 === o ? i : o;
                            return function (e, n, i, o) {
                                if (0 === e || e) {
                                    var l,
                                        c = o || r,
                                        s = e;
                                    if (e instanceof Date) l = new Date(e.getTime());
                                    else if ("string" != typeof e && void 0 !== e.toFixed) l = new Date(e);
                                    else if ("string" == typeof e) {
                                        var d = n || (t || a).dateFormat,
                                            u = String(e).trim();
                                        if ("today" === u) (l = new Date()), (i = !0);
                                        else if (t && t.parseDate) l = t.parseDate(e, d);
                                        else if (/Z$/.test(u) || /GMT$/.test(u)) l = new Date(e);
                                        else {
                                            for (var f = void 0, m = [], g = 0, p = 0, h = ""; g < d.length; g++) {
                                                var b = d[g],
                                                    w = "\\" === b,
                                                    M = "\\" === d[g - 1] || w;
                                                if (D[b] && !M) {
                                                    h += D[b];
                                                    var y = new RegExp(h).exec(e);
                                                    y && (f = !0) && m["Y" !== b ? "push" : "unshift"]({ fn: v[b], val: y[++p] });
                                                } else w || (h += ".");
                                            }
                                            (l = t && t.noCalendar ? new Date(new Date().setHours(0, 0, 0, 0)) : new Date(new Date().getFullYear(), 0, 1, 0, 0, 0, 0)),
                                                m.forEach(function (e) {
                                                    var n = e.fn,
                                                        t = e.val;
                                                    return (l = n(l, t, c) || l);
                                                }),
                                                (l = f ? l : void 0);
                                        }
                                    }
                                    if (l instanceof Date && !isNaN(l.getTime())) return !0 === i && l.setHours(0, 0, 0, 0), l;
                                    t.errorHandler(new Error("Invalid date provided: " + s));
                                }
                            };
                        };
                    function y(e, n, t) {
                        return void 0 === t && (t = !0), !1 !== t ? new Date(e.getTime()).setHours(0, 0, 0, 0) - new Date(n.getTime()).setHours(0, 0, 0, 0) : e.getTime() - n.getTime();
                    }
                    var C = function (e, n, t) {
                            return 3600 * e + 60 * n + t;
                        },
                        x = 864e5;
                    function E(e) {
                        var n = e.defaultHour,
                            t = e.defaultMinute,
                            a = e.defaultSeconds;
                        if (void 0 !== e.minDate) {
                            var i = e.minDate.getHours(),
                                o = e.minDate.getMinutes(),
                                r = e.minDate.getSeconds();
                            n < i && (n = i), n === i && t < o && (t = o), n === i && t === o && a < r && (a = e.minDate.getSeconds());
                        }
                        if (void 0 !== e.maxDate) {
                            var l = e.maxDate.getHours(),
                                c = e.maxDate.getMinutes();
                            (n = Math.min(n, l)) === l && (t = Math.min(c, t)), n === l && t === c && (a = e.maxDate.getSeconds());
                        }
                        return { hours: n, minutes: t, seconds: a };
                    }
                    "function" != typeof Object.assign &&
                        (Object.assign = function (e) {
                            for (var n = [], t = 1; t < arguments.length; t++) n[t - 1] = arguments[t];
                            if (!e) throw TypeError("Cannot convert undefined or null to object");
                            for (
                                var a = function (n) {
                                        n &&
                                            Object.keys(n).forEach(function (t) {
                                                return (e[t] = n[t]);
                                            });
                                    },
                                    i = 0,
                                    o = n;
                                i < o.length;
                                i++
                            )
                                a(o[i]);
                            return e;
                        });
                    function k(p, v) {
                        var b = { config: e(e({}, a), S.defaultConfig), l10n: i };
                        function k() {
                            var e;
                            return (null === (e = b.calendarContainer) || void 0 === e ? void 0 : e.getRootNode()).activeElement || document.activeElement;
                        }
                        function T(e) {
                            return e.bind(b);
                        }
                        function _() {
                            var e = b.config;
                            (!1 === e.weekNumbers && 1 === e.showMonths) ||
                                (!0 !== e.noCalendar &&
                                    window.requestAnimationFrame(function () {
                                        if ((void 0 !== b.calendarContainer && ((b.calendarContainer.style.visibility = "hidden"), (b.calendarContainer.style.display = "block")), void 0 !== b.daysContainer)) {
                                            var n = (b.days.offsetWidth + 1) * e.showMonths;
                                            (b.daysContainer.style.width = n + "px"),
                                                (b.calendarContainer.style.width = n + (void 0 !== b.weekWrapper ? b.weekWrapper.offsetWidth : 0) + "px"),
                                                b.calendarContainer.style.removeProperty("visibility"),
                                                b.calendarContainer.style.removeProperty("display");
                                        }
                                    }));
                        }
                        function I(e) {
                            if (0 === b.selectedDates.length) {
                                var n = void 0 === b.config.minDate || y(new Date(), b.config.minDate) >= 0 ? new Date() : new Date(b.config.minDate.getTime()),
                                    t = E(b.config);
                                n.setHours(t.hours, t.minutes, t.seconds, n.getMilliseconds()), (b.selectedDates = [n]), (b.latestSelectedDateObj = n);
                            }
                            void 0 !== e &&
                                "blur" !== e.type &&
                                (function (e) {
                                    e.preventDefault();
                                    var n = "keydown" === e.type,
                                        t = g(e),
                                        a = t;
                                    void 0 !== b.amPM && t === b.amPM && (b.amPM.textContent = b.l10n.amPM[r(b.amPM.textContent === b.l10n.amPM[0])]);
                                    var i = parseFloat(a.getAttribute("min")),
                                        l = parseFloat(a.getAttribute("max")),
                                        c = parseFloat(a.getAttribute("step")),
                                        s = parseInt(a.value, 10),
                                        d = s + c * (e.delta || (n ? (38 === e.which ? 1 : -1) : 0));
                                    if (void 0 !== a.value && 2 === a.value.length) {
                                        var u = a === b.hourElement,
                                            f = a === b.minuteElement;
                                        d < i ? ((d = l + d + r(!u) + (r(u) && r(!b.amPM))), f && L(void 0, -1, b.hourElement)) : d > l && ((d = a === b.hourElement ? d - l - r(!b.amPM) : i), f && L(void 0, 1, b.hourElement)),
                                            b.amPM && u && (1 === c ? d + s === 23 : Math.abs(d - s) > c) && (b.amPM.textContent = b.l10n.amPM[r(b.amPM.textContent === b.l10n.amPM[0])]),
                                            (a.value = o(d));
                                    }
                                })(e);
                            var a = b._input.value;
                            O(), Ce(), b._input.value !== a && b._debouncedChange();
                        }
                        function O() {
                            if (void 0 !== b.hourElement && void 0 !== b.minuteElement) {
                                var e = (parseInt(b.hourElement.value.slice(-2), 10) || 0) % 24,
                                    n = (parseInt(b.minuteElement.value, 10) || 0) % 60,
                                    t = void 0 !== b.secondElement ? (parseInt(b.secondElement.value, 10) || 0) % 60 : 0;
                                void 0 !== b.amPM && ((f = e), (m = b.amPM.textContent), (e = (f % 12) + 12 * r(m === b.l10n.amPM[1])));
                                var a = void 0 !== b.config.minTime || (b.config.minDate && b.minDateHasTime && b.latestSelectedDateObj && 0 === y(b.latestSelectedDateObj, b.config.minDate, !0)),
                                    i = void 0 !== b.config.maxTime || (b.config.maxDate && b.maxDateHasTime && b.latestSelectedDateObj && 0 === y(b.latestSelectedDateObj, b.config.maxDate, !0));
                                if (void 0 !== b.config.maxTime && void 0 !== b.config.minTime && b.config.minTime > b.config.maxTime) {
                                    var o = C(b.config.minTime.getHours(), b.config.minTime.getMinutes(), b.config.minTime.getSeconds()),
                                        l = C(b.config.maxTime.getHours(), b.config.maxTime.getMinutes(), b.config.maxTime.getSeconds()),
                                        c = C(e, n, t);
                                    if (c > l && c < o) {
                                        var s = (function (e) {
                                            var n = Math.floor(e / 3600),
                                                t = (e - 3600 * n) / 60;
                                            return [n, t, e - 3600 * n - 60 * t];
                                        })(o);
                                        (e = s[0]), (n = s[1]), (t = s[2]);
                                    }
                                } else {
                                    if (i) {
                                        var d = void 0 !== b.config.maxTime ? b.config.maxTime : b.config.maxDate;
                                        (e = Math.min(e, d.getHours())) === d.getHours() && (n = Math.min(n, d.getMinutes())), n === d.getMinutes() && (t = Math.min(t, d.getSeconds()));
                                    }
                                    if (a) {
                                        var u = void 0 !== b.config.minTime ? b.config.minTime : b.config.minDate;
                                        (e = Math.max(e, u.getHours())) === u.getHours() && n < u.getMinutes() && (n = u.getMinutes()), n === u.getMinutes() && (t = Math.max(t, u.getSeconds()));
                                    }
                                }
                                A(e, n, t);
                            }
                            var f, m;
                        }
                        function F(e) {
                            var n = e || b.latestSelectedDateObj;
                            n && n instanceof Date && A(n.getHours(), n.getMinutes(), n.getSeconds());
                        }
                        function A(e, n, t) {
                            void 0 !== b.latestSelectedDateObj && b.latestSelectedDateObj.setHours(e % 24, n, t || 0, 0),
                                b.hourElement &&
                                    b.minuteElement &&
                                    !b.isMobile &&
                                    ((b.hourElement.value = o(b.config.time_24hr ? e : ((12 + e) % 12) + 12 * r(e % 12 == 0))),
                                    (b.minuteElement.value = o(n)),
                                    void 0 !== b.amPM && (b.amPM.textContent = b.l10n.amPM[r(e >= 12)]),
                                    void 0 !== b.secondElement && (b.secondElement.value = o(t)));
                        }
                        function N(e) {
                            var n = g(e),
                                t = parseInt(n.value) + (e.delta || 0);
                            (t / 1e3 > 1 || ("Enter" === e.key && !/[^\d]/.test(t.toString()))) && ee(t);
                        }
                        function P(e, n, t, a) {
                            return n instanceof Array
                                ? n.forEach(function (n) {
                                      return P(e, n, t, a);
                                  })
                                : e instanceof Array
                                ? e.forEach(function (e) {
                                      return P(e, n, t, a);
                                  })
                                : (e.addEventListener(n, t, a),
                                  void b._handlers.push({
                                      remove: function () {
                                          return e.removeEventListener(n, t, a);
                                      },
                                  }));
                        }
                        function Y() {
                            De("onChange");
                        }
                        function j(e, n) {
                            var t = void 0 !== e ? b.parseDate(e) : b.latestSelectedDateObj || (b.config.minDate && b.config.minDate > b.now ? b.config.minDate : b.config.maxDate && b.config.maxDate < b.now ? b.config.maxDate : b.now),
                                a = b.currentYear,
                                i = b.currentMonth;
                            try {
                                void 0 !== t && ((b.currentYear = t.getFullYear()), (b.currentMonth = t.getMonth()));
                            } catch (e) {
                                (e.message = "Invalid date supplied: " + t), b.config.errorHandler(e);
                            }
                            n && b.currentYear !== a && (De("onYearChange"), q()), !n || (b.currentYear === a && b.currentMonth === i) || De("onMonthChange"), b.redraw();
                        }
                        function H(e) {
                            var n = g(e);
                            ~n.className.indexOf("arrow") && L(e, n.classList.contains("arrowUp") ? 1 : -1);
                        }
                        function L(e, n, t) {
                            var a = e && g(e),
                                i = t || (a && a.parentNode && a.parentNode.firstChild),
                                o = be("increment");
                            (o.delta = n), i && i.dispatchEvent(o);
                        }
                        function R(e, n, t, a) {
                            var i = ne(n, !0),
                                o = d("span", e, n.getDate().toString());
                            return (
                                (o.dateObj = n),
                                (o.$i = a),
                                o.setAttribute("aria-label", b.formatDate(n, b.config.ariaDateFormat)),
                                -1 === e.indexOf("hidden") && 0 === y(n, b.now) && ((b.todayDateElem = o), o.classList.add("today"), o.setAttribute("aria-current", "date")),
                                i
                                    ? ((o.tabIndex = -1),
                                      we(n) &&
                                          (o.classList.add("selected"),
                                          (b.selectedDateElem = o),
                                          "range" === b.config.mode &&
                                              (s(o, "startRange", b.selectedDates[0] && 0 === y(n, b.selectedDates[0], !0)),
                                              s(o, "endRange", b.selectedDates[1] && 0 === y(n, b.selectedDates[1], !0)),
                                              "nextMonthDay" === e && o.classList.add("inRange"))))
                                    : o.classList.add("flatpickr-disabled"),
                                "range" === b.config.mode &&
                                    (function (e) {
                                        return !("range" !== b.config.mode || b.selectedDates.length < 2) && y(e, b.selectedDates[0]) >= 0 && y(e, b.selectedDates[1]) <= 0;
                                    })(n) &&
                                    !we(n) &&
                                    o.classList.add("inRange"),
                                b.weekNumbers && 1 === b.config.showMonths && "prevMonthDay" !== e && a % 7 == 6 && b.weekNumbers.insertAdjacentHTML("beforeend", "<span class='flatpickr-day'>" + b.config.getWeek(n) + "</span>"),
                                De("onDayCreate", o),
                                o
                            );
                        }
                        function W(e) {
                            e.focus(), "range" === b.config.mode && oe(e);
                        }
                        function B(e) {
                            for (var n = e > 0 ? 0 : b.config.showMonths - 1, t = e > 0 ? b.config.showMonths : -1, a = n; a != t; a += e)
                                for (var i = b.daysContainer.children[a], o = e > 0 ? 0 : i.children.length - 1, r = e > 0 ? i.children.length : -1, l = o; l != r; l += e) {
                                    var c = i.children[l];
                                    if (-1 === c.className.indexOf("hidden") && ne(c.dateObj)) return c;
                                }
                        }
                        function J(e, n) {
                            var t = k(),
                                a = te(t || document.body),
                                i = void 0 !== e ? e : a ? t : void 0 !== b.selectedDateElem && te(b.selectedDateElem) ? b.selectedDateElem : void 0 !== b.todayDateElem && te(b.todayDateElem) ? b.todayDateElem : B(n > 0 ? 1 : -1);
                            void 0 === i
                                ? b._input.focus()
                                : a
                                ? (function (e, n) {
                                      for (var t = -1 === e.className.indexOf("Month") ? e.dateObj.getMonth() : b.currentMonth, a = n > 0 ? b.config.showMonths : -1, i = n > 0 ? 1 : -1, o = t - b.currentMonth; o != a; o += i)
                                          for (
                                              var r = b.daysContainer.children[o], l = t - b.currentMonth === o ? e.$i + n : n < 0 ? r.children.length - 1 : 0, c = r.children.length, s = l;
                                              s >= 0 && s < c && s != (n > 0 ? c : -1);
                                              s += i
                                          ) {
                                              var d = r.children[s];
                                              if (-1 === d.className.indexOf("hidden") && ne(d.dateObj) && Math.abs(e.$i - s) >= Math.abs(n)) return W(d);
                                          }
                                      b.changeMonth(i), J(B(i), 0);
                                  })(i, n)
                                : W(i);
                        }
                        function K(e, n) {
                            for (
                                var t = (new Date(e, n, 1).getDay() - b.l10n.firstDayOfWeek + 7) % 7,
                                    a = b.utils.getDaysInMonth((n - 1 + 12) % 12, e),
                                    i = b.utils.getDaysInMonth(n, e),
                                    o = window.document.createDocumentFragment(),
                                    r = b.config.showMonths > 1,
                                    l = r ? "prevMonthDay hidden" : "prevMonthDay",
                                    c = r ? "nextMonthDay hidden" : "nextMonthDay",
                                    s = a + 1 - t,
                                    u = 0;
                                s <= a;
                                s++, u++
                            )
                                o.appendChild(R("flatpickr-day " + l, new Date(e, n - 1, s), 0, u));
                            for (s = 1; s <= i; s++, u++) o.appendChild(R("flatpickr-day", new Date(e, n, s), 0, u));
                            for (var f = i + 1; f <= 42 - t && (1 === b.config.showMonths || u % 7 != 0); f++, u++) o.appendChild(R("flatpickr-day " + c, new Date(e, n + 1, f % i), 0, u));
                            var m = d("div", "dayContainer");
                            return m.appendChild(o), m;
                        }
                        function U() {
                            if (void 0 !== b.daysContainer) {
                                u(b.daysContainer), b.weekNumbers && u(b.weekNumbers);
                                for (var e = document.createDocumentFragment(), n = 0; n < b.config.showMonths; n++) {
                                    var t = new Date(b.currentYear, b.currentMonth, 1);
                                    t.setMonth(b.currentMonth + n), e.appendChild(K(t.getFullYear(), t.getMonth()));
                                }
                                b.daysContainer.appendChild(e), (b.days = b.daysContainer.firstChild), "range" === b.config.mode && 1 === b.selectedDates.length && oe();
                            }
                        }
                        function q() {
                            if (!(b.config.showMonths > 1 || "dropdown" !== b.config.monthSelectorType)) {
                                var e = function (e) {
                                    return !(
                                        (void 0 !== b.config.minDate && b.currentYear === b.config.minDate.getFullYear() && e < b.config.minDate.getMonth()) ||
                                        (void 0 !== b.config.maxDate && b.currentYear === b.config.maxDate.getFullYear() && e > b.config.maxDate.getMonth())
                                    );
                                };
                                (b.monthsDropdownContainer.tabIndex = -1), (b.monthsDropdownContainer.innerHTML = "");
                                for (var n = 0; n < 12; n++)
                                    if (e(n)) {
                                        var t = d("option", "flatpickr-monthDropdown-month");
                                        (t.value = new Date(b.currentYear, n).getMonth().toString()),
                                            (t.textContent = h(n, b.config.shorthandCurrentMonth, b.l10n)),
                                            (t.tabIndex = -1),
                                            b.currentMonth === n && (t.selected = !0),
                                            b.monthsDropdownContainer.appendChild(t);
                                    }
                            }
                        }
                        function $() {
                            var e,
                                n = d("div", "flatpickr-month"),
                                t = window.document.createDocumentFragment();
                            b.config.showMonths > 1 || "static" === b.config.monthSelectorType
                                ? (e = d("span", "cur-month"))
                                : ((b.monthsDropdownContainer = d("select", "flatpickr-monthDropdown-months")),
                                  b.monthsDropdownContainer.setAttribute("aria-label", b.l10n.monthAriaLabel),
                                  P(b.monthsDropdownContainer, "change", function (e) {
                                      var n = g(e),
                                          t = parseInt(n.value, 10);
                                      b.changeMonth(t - b.currentMonth), De("onMonthChange");
                                  }),
                                  q(),
                                  (e = b.monthsDropdownContainer));
                            var a = m("cur-year", { tabindex: "-1" }),
                                i = a.getElementsByTagName("input")[0];
                            i.setAttribute("aria-label", b.l10n.yearAriaLabel),
                                b.config.minDate && i.setAttribute("min", b.config.minDate.getFullYear().toString()),
                                b.config.maxDate && (i.setAttribute("max", b.config.maxDate.getFullYear().toString()), (i.disabled = !!b.config.minDate && b.config.minDate.getFullYear() === b.config.maxDate.getFullYear()));
                            var o = d("div", "flatpickr-current-month");
                            return o.appendChild(e), o.appendChild(a), t.appendChild(o), n.appendChild(t), { container: n, yearElement: i, monthElement: e };
                        }
                        function V() {
                            u(b.monthNav), b.monthNav.appendChild(b.prevMonthNav), b.config.showMonths && ((b.yearElements = []), (b.monthElements = []));
                            for (var e = b.config.showMonths; e--; ) {
                                var n = $();
                                b.yearElements.push(n.yearElement), b.monthElements.push(n.monthElement), b.monthNav.appendChild(n.container);
                            }
                            b.monthNav.appendChild(b.nextMonthNav);
                        }
                        function z() {
                            b.weekdayContainer ? u(b.weekdayContainer) : (b.weekdayContainer = d("div", "flatpickr-weekdays"));
                            for (var e = b.config.showMonths; e--; ) {
                                var n = d("div", "flatpickr-weekdaycontainer");
                                b.weekdayContainer.appendChild(n);
                            }
                            return G(), b.weekdayContainer;
                        }
                        function G() {
                            if (b.weekdayContainer) {
                                var e = b.l10n.firstDayOfWeek,
                                    t = n(b.l10n.weekdays.shorthand);
                                e > 0 && e < t.length && (t = n(t.splice(e, t.length), t.splice(0, e)));
                                for (var a = b.config.showMonths; a--; )
                                    b.weekdayContainer.children[a].innerHTML = "\n      <span class='flatpickr-weekday'>\n        " + t.join("</span><span class='flatpickr-weekday'>") + "\n      </span>\n      ";
                            }
                        }
                        function Z(e, n) {
                            void 0 === n && (n = !0);
                            var t = n ? e : e - b.currentMonth;
                            (t < 0 && !0 === b._hidePrevMonthArrow) ||
                                (t > 0 && !0 === b._hideNextMonthArrow) ||
                                ((b.currentMonth += t),
                                (b.currentMonth < 0 || b.currentMonth > 11) && ((b.currentYear += b.currentMonth > 11 ? 1 : -1), (b.currentMonth = (b.currentMonth + 12) % 12), De("onYearChange"), q()),
                                U(),
                                De("onMonthChange"),
                                Me());
                        }
                        function Q(e) {
                            return b.calendarContainer.contains(e);
                        }
                        function X(e) {
                            if (b.isOpen && !b.config.inline) {
                                var n = g(e),
                                    t = Q(n),
                                    a = !(n === b.input || n === b.altInput || b.element.contains(n) || (e.path && e.path.indexOf && (~e.path.indexOf(b.input) || ~e.path.indexOf(b.altInput))) || t || Q(e.relatedTarget)),
                                    i = !b.config.ignoredFocusElements.some(function (e) {
                                        return e.contains(n);
                                    });
                                a &&
                                    i &&
                                    (b.config.allowInput && b.setDate(b._input.value, !1, b.config.altInput ? b.config.altFormat : b.config.dateFormat),
                                    void 0 !== b.timeContainer && void 0 !== b.minuteElement && void 0 !== b.hourElement && "" !== b.input.value && void 0 !== b.input.value && I(),
                                    b.close(),
                                    b.config && "range" === b.config.mode && 1 === b.selectedDates.length && b.clear(!1));
                            }
                        }
                        function ee(e) {
                            if (!(!e || (b.config.minDate && e < b.config.minDate.getFullYear()) || (b.config.maxDate && e > b.config.maxDate.getFullYear()))) {
                                var n = e,
                                    t = b.currentYear !== n;
                                (b.currentYear = n || b.currentYear),
                                    b.config.maxDate && b.currentYear === b.config.maxDate.getFullYear()
                                        ? (b.currentMonth = Math.min(b.config.maxDate.getMonth(), b.currentMonth))
                                        : b.config.minDate && b.currentYear === b.config.minDate.getFullYear() && (b.currentMonth = Math.max(b.config.minDate.getMonth(), b.currentMonth)),
                                    t && (b.redraw(), De("onYearChange"), q());
                            }
                        }
                        function ne(e, n) {
                            var t;
                            void 0 === n && (n = !0);
                            var a = b.parseDate(e, void 0, n);
                            if ((b.config.minDate && a && y(a, b.config.minDate, void 0 !== n ? n : !b.minDateHasTime) < 0) || (b.config.maxDate && a && y(a, b.config.maxDate, void 0 !== n ? n : !b.maxDateHasTime) > 0)) return !1;
                            if (!b.config.enable && 0 === b.config.disable.length) return !0;
                            if (void 0 === a) return !1;
                            for (var i = !!b.config.enable, o = null !== (t = b.config.enable) && void 0 !== t ? t : b.config.disable, r = 0, l = void 0; r < o.length; r++) {
                                if ("function" == typeof (l = o[r]) && l(a)) return i;
                                if (l instanceof Date && void 0 !== a && l.getTime() === a.getTime()) return i;
                                if ("string" == typeof l) {
                                    var c = b.parseDate(l, void 0, !0);
                                    return c && c.getTime() === a.getTime() ? i : !i;
                                }
                                if ("object" == typeof l && void 0 !== a && l.from && l.to && a.getTime() >= l.from.getTime() && a.getTime() <= l.to.getTime()) return i;
                            }
                            return !i;
                        }
                        function te(e) {
                            return void 0 !== b.daysContainer && -1 === e.className.indexOf("hidden") && -1 === e.className.indexOf("flatpickr-disabled") && b.daysContainer.contains(e);
                        }
                        function ae(e) {
                            var n = e.target === b._input,
                                t = b._input.value.trimEnd() !== ye();
                            !n || !t || (e.relatedTarget && Q(e.relatedTarget)) || b.setDate(b._input.value, !0, e.target === b.altInput ? b.config.altFormat : b.config.dateFormat);
                        }
                        function ie(e) {
                            var n = g(e),
                                t = b.config.wrap ? p.contains(n) : n === b._input,
                                a = b.config.allowInput,
                                i = b.isOpen && (!a || !t),
                                o = b.config.inline && t && !a;
                            if (13 === e.keyCode && t) {
                                if (a) return b.setDate(b._input.value, !0, n === b.altInput ? b.config.altFormat : b.config.dateFormat), b.close(), n.blur();
                                b.open();
                            } else if (Q(n) || i || o) {
                                var r = !!b.timeContainer && b.timeContainer.contains(n);
                                switch (e.keyCode) {
                                    case 13:
                                        r ? (e.preventDefault(), I(), fe()) : me(e);
                                        break;
                                    case 27:
                                        e.preventDefault(), fe();
                                        break;
                                    case 8:
                                    case 46:
                                        t && !b.config.allowInput && (e.preventDefault(), b.clear());
                                        break;
                                    case 37:
                                    case 39:
                                        if (r || t) b.hourElement && b.hourElement.focus();
                                        else {
                                            e.preventDefault();
                                            var l = k();
                                            if (void 0 !== b.daysContainer && (!1 === a || (l && te(l)))) {
                                                var c = 39 === e.keyCode ? 1 : -1;
                                                e.ctrlKey ? (e.stopPropagation(), Z(c), J(B(1), 0)) : J(void 0, c);
                                            }
                                        }
                                        break;
                                    case 38:
                                    case 40:
                                        e.preventDefault();
                                        var s = 40 === e.keyCode ? 1 : -1;
                                        (b.daysContainer && void 0 !== n.$i) || n === b.input || n === b.altInput
                                            ? e.ctrlKey
                                                ? (e.stopPropagation(), ee(b.currentYear - s), J(B(1), 0))
                                                : r || J(void 0, 7 * s)
                                            : n === b.currentYearElement
                                            ? ee(b.currentYear - s)
                                            : b.config.enableTime && (!r && b.hourElement && b.hourElement.focus(), I(e), b._debouncedChange());
                                        break;
                                    case 9:
                                        if (r) {
                                            var d = [b.hourElement, b.minuteElement, b.secondElement, b.amPM].concat(b.pluginElements).filter(function (e) {
                                                    return e;
                                                }),
                                                u = d.indexOf(n);
                                            if (-1 !== u) {
                                                var f = d[u + (e.shiftKey ? -1 : 1)];
                                                e.preventDefault(), (f || b._input).focus();
                                            }
                                        } else !b.config.noCalendar && b.daysContainer && b.daysContainer.contains(n) && e.shiftKey && (e.preventDefault(), b._input.focus());
                                }
                            }
                            if (void 0 !== b.amPM && n === b.amPM)
                                switch (e.key) {
                                    case b.l10n.amPM[0].charAt(0):
                                    case b.l10n.amPM[0].charAt(0).toLowerCase():
                                        (b.amPM.textContent = b.l10n.amPM[0]), O(), Ce();
                                        break;
                                    case b.l10n.amPM[1].charAt(0):
                                    case b.l10n.amPM[1].charAt(0).toLowerCase():
                                        (b.amPM.textContent = b.l10n.amPM[1]), O(), Ce();
                                }
                            (t || Q(n)) && De("onKeyDown", e);
                        }
                        function oe(e, n) {
                            if ((void 0 === n && (n = "flatpickr-day"), 1 === b.selectedDates.length && (!e || (e.classList.contains(n) && !e.classList.contains("flatpickr-disabled"))))) {
                                for (
                                    var t = e ? e.dateObj.getTime() : b.days.firstElementChild.dateObj.getTime(),
                                        a = b.parseDate(b.selectedDates[0], void 0, !0).getTime(),
                                        i = Math.min(t, b.selectedDates[0].getTime()),
                                        o = Math.max(t, b.selectedDates[0].getTime()),
                                        r = !1,
                                        l = 0,
                                        c = 0,
                                        s = i;
                                    s < o;
                                    s += x
                                )
                                    ne(new Date(s), !0) || ((r = r || (s > i && s < o)), s < a && (!l || s > l) ? (l = s) : s > a && (!c || s < c) && (c = s));
                                Array.from(b.rContainer.querySelectorAll("*:nth-child(-n+" + b.config.showMonths + ") > ." + n)).forEach(function (n) {
                                    var i,
                                        o,
                                        s,
                                        d = n.dateObj.getTime(),
                                        u = (l > 0 && d < l) || (c > 0 && d > c);
                                    if (u)
                                        return (
                                            n.classList.add("notAllowed"),
                                            void ["inRange", "startRange", "endRange"].forEach(function (e) {
                                                n.classList.remove(e);
                                            })
                                        );
                                    (r && !u) ||
                                        (["startRange", "inRange", "endRange", "notAllowed"].forEach(function (e) {
                                            n.classList.remove(e);
                                        }),
                                        void 0 !== e &&
                                            (e.classList.add(t <= b.selectedDates[0].getTime() ? "startRange" : "endRange"),
                                            a < t && d === a ? n.classList.add("startRange") : a > t && d === a && n.classList.add("endRange"),
                                            d >= l && (0 === c || d <= c) && ((o = a), (s = t), (i = d) > Math.min(o, s) && i < Math.max(o, s)) && n.classList.add("inRange")));
                                });
                            }
                        }
                        function re() {
                            !b.isOpen || b.config.static || b.config.inline || de();
                        }
                        function le(e) {
                            return function (n) {
                                var t = (b.config["_" + e + "Date"] = b.parseDate(n, b.config.dateFormat)),
                                    a = b.config["_" + ("min" === e ? "max" : "min") + "Date"];
                                void 0 !== t && (b["min" === e ? "minDateHasTime" : "maxDateHasTime"] = t.getHours() > 0 || t.getMinutes() > 0 || t.getSeconds() > 0),
                                    b.selectedDates &&
                                        ((b.selectedDates = b.selectedDates.filter(function (e) {
                                            return ne(e);
                                        })),
                                        b.selectedDates.length || "min" !== e || F(t),
                                        Ce()),
                                    b.daysContainer &&
                                        (ue(),
                                        void 0 !== t ? (b.currentYearElement[e] = t.getFullYear().toString()) : b.currentYearElement.removeAttribute(e),
                                        (b.currentYearElement.disabled = !!a && void 0 !== t && a.getFullYear() === t.getFullYear()));
                            };
                        }
                        function ce() {
                            return b.config.wrap ? p.querySelector("[data-input]") : p;
                        }
                        function se() {
                            "object" != typeof b.config.locale && void 0 === S.l10ns[b.config.locale] && b.config.errorHandler(new Error("flatpickr: invalid locale " + b.config.locale)),
                                (b.l10n = e(e({}, S.l10ns.default), "object" == typeof b.config.locale ? b.config.locale : "default" !== b.config.locale ? S.l10ns[b.config.locale] : void 0)),
                                (D.D = "(" + b.l10n.weekdays.shorthand.join("|") + ")"),
                                (D.l = "(" + b.l10n.weekdays.longhand.join("|") + ")"),
                                (D.M = "(" + b.l10n.months.shorthand.join("|") + ")"),
                                (D.F = "(" + b.l10n.months.longhand.join("|") + ")"),
                                (D.K = "(" + b.l10n.amPM[0] + "|" + b.l10n.amPM[1] + "|" + b.l10n.amPM[0].toLowerCase() + "|" + b.l10n.amPM[1].toLowerCase() + ")"),
                                void 0 === e(e({}, v), JSON.parse(JSON.stringify(p.dataset || {}))).time_24hr && void 0 === S.defaultConfig.time_24hr && (b.config.time_24hr = b.l10n.time_24hr),
                                (b.formatDate = w(b)),
                                (b.parseDate = M({ config: b.config, l10n: b.l10n }));
                        }
                        function de(e) {
                            if ("function" != typeof b.config.position) {
                                if (void 0 !== b.calendarContainer) {
                                    De("onPreCalendarPosition");
                                    var n = e || b._positionElement,
                                        t = Array.prototype.reduce.call(
                                            b.calendarContainer.children,
                                            function (e, n) {
                                                return e + n.offsetHeight;
                                            },
                                            0
                                        ),
                                        a = b.calendarContainer.offsetWidth,
                                        i = b.config.position.split(" "),
                                        o = i[0],
                                        r = i.length > 1 ? i[1] : null,
                                        l = n.getBoundingClientRect(),
                                        c = window.innerHeight - l.bottom,
                                        d = "above" === o || ("below" !== o && c < t && l.top > t),
                                        u = window.pageYOffset + l.top + (d ? -t - 2 : n.offsetHeight + 2);
                                    if ((s(b.calendarContainer, "arrowTop", !d), s(b.calendarContainer, "arrowBottom", d), !b.config.inline)) {
                                        var f = window.pageXOffset + l.left,
                                            m = !1,
                                            g = !1;
                                        "center" === r ? ((f -= (a - l.width) / 2), (m = !0)) : "right" === r && ((f -= a - l.width), (g = !0)),
                                            s(b.calendarContainer, "arrowLeft", !m && !g),
                                            s(b.calendarContainer, "arrowCenter", m),
                                            s(b.calendarContainer, "arrowRight", g);
                                        var p = window.document.body.offsetWidth - (window.pageXOffset + l.right),
                                            h = f + a > window.document.body.offsetWidth,
                                            v = p + a > window.document.body.offsetWidth;
                                        if ((s(b.calendarContainer, "rightMost", h), !b.config.static))
                                            if (((b.calendarContainer.style.top = u + "px"), h))
                                                if (v) {
                                                    var D = (function () {
                                                        for (var e = null, n = 0; n < document.styleSheets.length; n++) {
                                                            var t = document.styleSheets[n];
                                                            if (t.cssRules) {
                                                                try {
                                                                    t.cssRules;
                                                                } catch (e) {
                                                                    continue;
                                                                }
                                                                e = t;
                                                                break;
                                                            }
                                                        }
                                                        return null != e ? e : ((a = document.createElement("style")), document.head.appendChild(a), a.sheet);
                                                        var a;
                                                    })();
                                                    if (void 0 === D) return;
                                                    var w = window.document.body.offsetWidth,
                                                        M = Math.max(0, w / 2 - a / 2),
                                                        y = D.cssRules.length,
                                                        C = "{left:" + l.left + "px;right:auto;}";
                                                    s(b.calendarContainer, "rightMost", !1),
                                                        s(b.calendarContainer, "centerMost", !0),
                                                        D.insertRule(".flatpickr-calendar.centerMost:before,.flatpickr-calendar.centerMost:after" + C, y),
                                                        (b.calendarContainer.style.left = M + "px"),
                                                        (b.calendarContainer.style.right = "auto");
                                                } else (b.calendarContainer.style.left = "auto"), (b.calendarContainer.style.right = p + "px");
                                            else (b.calendarContainer.style.left = f + "px"), (b.calendarContainer.style.right = "auto");
                                    }
                                }
                            } else b.config.position(b, e);
                        }
                        function ue() {
                            b.config.noCalendar || b.isMobile || (q(), Me(), U());
                        }
                        function fe() {
                            b._input.focus(), -1 !== window.navigator.userAgent.indexOf("MSIE") || void 0 !== navigator.msMaxTouchPoints ? setTimeout(b.close, 0) : b.close();
                        }
                        function me(e) {
                            e.preventDefault(), e.stopPropagation();
                            var n = f(g(e), function (e) {
                                return e.classList && e.classList.contains("flatpickr-day") && !e.classList.contains("flatpickr-disabled") && !e.classList.contains("notAllowed");
                            });
                            if (void 0 !== n) {
                                var t = n,
                                    a = (b.latestSelectedDateObj = new Date(t.dateObj.getTime())),
                                    i = (a.getMonth() < b.currentMonth || a.getMonth() > b.currentMonth + b.config.showMonths - 1) && "range" !== b.config.mode;
                                if (((b.selectedDateElem = t), "single" === b.config.mode)) b.selectedDates = [a];
                                else if ("multiple" === b.config.mode) {
                                    var o = we(a);
                                    o ? b.selectedDates.splice(parseInt(o), 1) : b.selectedDates.push(a);
                                } else
                                    "range" === b.config.mode &&
                                        (2 === b.selectedDates.length && b.clear(!1, !1),
                                        (b.latestSelectedDateObj = a),
                                        b.selectedDates.push(a),
                                        0 !== y(a, b.selectedDates[0], !0) &&
                                            b.selectedDates.sort(function (e, n) {
                                                return e.getTime() - n.getTime();
                                            }));
                                if ((O(), i)) {
                                    var r = b.currentYear !== a.getFullYear();
                                    (b.currentYear = a.getFullYear()), (b.currentMonth = a.getMonth()), r && (De("onYearChange"), q()), De("onMonthChange");
                                }
                                if (
                                    (Me(),
                                    U(),
                                    Ce(),
                                    i || "range" === b.config.mode || 1 !== b.config.showMonths ? void 0 !== b.selectedDateElem && void 0 === b.hourElement && b.selectedDateElem && b.selectedDateElem.focus() : W(t),
                                    void 0 !== b.hourElement && void 0 !== b.hourElement && b.hourElement.focus(),
                                    b.config.closeOnSelect)
                                ) {
                                    var l = "single" === b.config.mode && !b.config.enableTime,
                                        c = "range" === b.config.mode && 2 === b.selectedDates.length && !b.config.enableTime;
                                    (l || c) && fe();
                                }
                                Y();
                            }
                        }
                        (b.parseDate = M({ config: b.config, l10n: b.l10n })),
                            (b._handlers = []),
                            (b.pluginElements = []),
                            (b.loadedPlugins = []),
                            (b._bind = P),
                            (b._setHoursFromDate = F),
                            (b._positionCalendar = de),
                            (b.changeMonth = Z),
                            (b.changeYear = ee),
                            (b.clear = function (e, n) {
                                if (
                                    (void 0 === e && (e = !0),
                                    void 0 === n && (n = !0),
                                    (b.input.value = ""),
                                    void 0 !== b.altInput && (b.altInput.value = ""),
                                    void 0 !== b.mobileInput && (b.mobileInput.value = ""),
                                    (b.selectedDates = []),
                                    (b.latestSelectedDateObj = void 0),
                                    !0 === n && ((b.currentYear = b._initialDate.getFullYear()), (b.currentMonth = b._initialDate.getMonth())),
                                    !0 === b.config.enableTime)
                                ) {
                                    var t = E(b.config);
                                    A(t.hours, t.minutes, t.seconds);
                                }
                                b.redraw(), e && De("onChange");
                            }),
                            (b.close = function () {
                                (b.isOpen = !1), b.isMobile || (void 0 !== b.calendarContainer && b.calendarContainer.classList.remove("open"), void 0 !== b._input && b._input.classList.remove("active")), De("onClose");
                            }),
                            (b.onMouseOver = oe),
                            (b._createElement = d),
                            (b.createDay = R),
                            (b.destroy = function () {
                                void 0 !== b.config && De("onDestroy");
                                for (var e = b._handlers.length; e--; ) b._handlers[e].remove();
                                if (((b._handlers = []), b.mobileInput)) b.mobileInput.parentNode && b.mobileInput.parentNode.removeChild(b.mobileInput), (b.mobileInput = void 0);
                                else if (b.calendarContainer && b.calendarContainer.parentNode)
                                    if (b.config.static && b.calendarContainer.parentNode) {
                                        var n = b.calendarContainer.parentNode;
                                        if ((n.lastChild && n.removeChild(n.lastChild), n.parentNode)) {
                                            for (; n.firstChild; ) n.parentNode.insertBefore(n.firstChild, n);
                                            n.parentNode.removeChild(n);
                                        }
                                    } else b.calendarContainer.parentNode.removeChild(b.calendarContainer);
                                b.altInput && ((b.input.type = "text"), b.altInput.parentNode && b.altInput.parentNode.removeChild(b.altInput), delete b.altInput),
                                    b.input && ((b.input.type = b.input._type), b.input.classList.remove("flatpickr-input"), b.input.removeAttribute("readonly")),
                                    [
                                        "_showTimeInput",
                                        "latestSelectedDateObj",
                                        "_hideNextMonthArrow",
                                        "_hidePrevMonthArrow",
                                        "__hideNextMonthArrow",
                                        "__hidePrevMonthArrow",
                                        "isMobile",
                                        "isOpen",
                                        "selectedDateElem",
                                        "minDateHasTime",
                                        "maxDateHasTime",
                                        "days",
                                        "daysContainer",
                                        "_input",
                                        "_positionElement",
                                        "innerContainer",
                                        "rContainer",
                                        "monthNav",
                                        "todayDateElem",
                                        "calendarContainer",
                                        "weekdayContainer",
                                        "prevMonthNav",
                                        "nextMonthNav",
                                        "monthsDropdownContainer",
                                        "currentMonthElement",
                                        "currentYearElement",
                                        "navigationCurrentMonth",
                                        "selectedDateElem",
                                        "config",
                                    ].forEach(function (e) {
                                        try {
                                            delete b[e];
                                        } catch (e) {}
                                    });
                            }),
                            (b.isEnabled = ne),
                            (b.jumpToDate = j),
                            (b.updateValue = Ce),
                            (b.open = function (e, n) {
                                if ((void 0 === n && (n = b._positionElement), !0 === b.isMobile)) {
                                    if (e) {
                                        e.preventDefault();
                                        var t = g(e);
                                        t && t.blur();
                                    }
                                    return void 0 !== b.mobileInput && (b.mobileInput.focus(), b.mobileInput.click()), void De("onOpen");
                                }
                                if (!b._input.disabled && !b.config.inline) {
                                    var a = b.isOpen;
                                    (b.isOpen = !0),
                                        a || (b.calendarContainer.classList.add("open"), b._input.classList.add("active"), De("onOpen"), de(n)),
                                        !0 === b.config.enableTime &&
                                            !0 === b.config.noCalendar &&
                                            (!1 !== b.config.allowInput ||
                                                (void 0 !== e && b.timeContainer.contains(e.relatedTarget)) ||
                                                setTimeout(function () {
                                                    return b.hourElement.select();
                                                }, 50));
                                }
                            }),
                            (b.redraw = ue),
                            (b.set = function (e, n) {
                                if (null !== e && "object" == typeof e)
                                    for (var a in (Object.assign(b.config, e), e))
                                        void 0 !== ge[a] &&
                                            ge[a].forEach(function (e) {
                                                return e();
                                            });
                                else
                                    (b.config[e] = n),
                                        void 0 !== ge[e]
                                            ? ge[e].forEach(function (e) {
                                                  return e();
                                              })
                                            : t.indexOf(e) > -1 && (b.config[e] = c(n));
                                b.redraw(), Ce(!0);
                            }),
                            (b.setDate = function (e, n, t) {
                                if ((void 0 === n && (n = !1), void 0 === t && (t = b.config.dateFormat), (0 !== e && !e) || (e instanceof Array && 0 === e.length))) return b.clear(n);
                                pe(e, t), (b.latestSelectedDateObj = b.selectedDates[b.selectedDates.length - 1]), b.redraw(), j(void 0, n), F(), 0 === b.selectedDates.length && b.clear(!1), Ce(n), n && De("onChange");
                            }),
                            (b.toggle = function (e) {
                                if (!0 === b.isOpen) return b.close();
                                b.open(e);
                            });
                        var ge = {
                            locale: [se, G],
                            showMonths: [V, _, z],
                            minDate: [j],
                            maxDate: [j],
                            positionElement: [ve],
                            clickOpens: [
                                function () {
                                    !0 === b.config.clickOpens ? (P(b._input, "focus", b.open), P(b._input, "click", b.open)) : (b._input.removeEventListener("focus", b.open), b._input.removeEventListener("click", b.open));
                                },
                            ],
                        };
                        function pe(e, n) {
                            var t = [];
                            if (e instanceof Array)
                                t = e.map(function (e) {
                                    return b.parseDate(e, n);
                                });
                            else if (e instanceof Date || "number" == typeof e) t = [b.parseDate(e, n)];
                            else if ("string" == typeof e)
                                switch (b.config.mode) {
                                    case "single":
                                    case "time":
                                        t = [b.parseDate(e, n)];
                                        break;
                                    case "multiple":
                                        t = e.split(b.config.conjunction).map(function (e) {
                                            return b.parseDate(e, n);
                                        });
                                        break;
                                    case "range":
                                        t = e.split(b.l10n.rangeSeparator).map(function (e) {
                                            return b.parseDate(e, n);
                                        });
                                }
                            else b.config.errorHandler(new Error("Invalid date supplied: " + JSON.stringify(e)));
                            (b.selectedDates = b.config.allowInvalidPreload
                                ? t
                                : t.filter(function (e) {
                                      return e instanceof Date && ne(e, !1);
                                  })),
                                "range" === b.config.mode &&
                                    b.selectedDates.sort(function (e, n) {
                                        return e.getTime() - n.getTime();
                                    });
                        }
                        function he(e) {
                            return e
                                .slice()
                                .map(function (e) {
                                    return "string" == typeof e || "number" == typeof e || e instanceof Date
                                        ? b.parseDate(e, void 0, !0)
                                        : e && "object" == typeof e && e.from && e.to
                                        ? { from: b.parseDate(e.from, void 0), to: b.parseDate(e.to, void 0) }
                                        : e;
                                })
                                .filter(function (e) {
                                    return e;
                                });
                        }
                        function ve() {
                            b._positionElement = b.config.positionElement || b._input;
                        }
                        function De(e, n) {
                            if (void 0 !== b.config) {
                                var t = b.config[e];
                                if (void 0 !== t && t.length > 0) for (var a = 0; t[a] && a < t.length; a++) t[a](b.selectedDates, b.input.value, b, n);
                                "onChange" === e && (b.input.dispatchEvent(be("change")), b.input.dispatchEvent(be("input")));
                            }
                        }
                        function be(e) {
                            var n = document.createEvent("Event");
                            return n.initEvent(e, !0, !0), n;
                        }
                        function we(e) {
                            for (var n = 0; n < b.selectedDates.length; n++) {
                                var t = b.selectedDates[n];
                                if (t instanceof Date && 0 === y(t, e)) return "" + n;
                            }
                            return !1;
                        }
                        function Me() {
                            b.config.noCalendar ||
                                b.isMobile ||
                                !b.monthNav ||
                                (b.yearElements.forEach(function (e, n) {
                                    var t = new Date(b.currentYear, b.currentMonth, 1);
                                    t.setMonth(b.currentMonth + n),
                                        b.config.showMonths > 1 || "static" === b.config.monthSelectorType
                                            ? (b.monthElements[n].textContent = h(t.getMonth(), b.config.shorthandCurrentMonth, b.l10n) + " ")
                                            : (b.monthsDropdownContainer.value = t.getMonth().toString()),
                                        (e.value = t.getFullYear().toString());
                                }),
                                (b._hidePrevMonthArrow = void 0 !== b.config.minDate && (b.currentYear === b.config.minDate.getFullYear() ? b.currentMonth <= b.config.minDate.getMonth() : b.currentYear < b.config.minDate.getFullYear())),
                                (b._hideNextMonthArrow =
                                    void 0 !== b.config.maxDate && (b.currentYear === b.config.maxDate.getFullYear() ? b.currentMonth + 1 > b.config.maxDate.getMonth() : b.currentYear > b.config.maxDate.getFullYear())));
                        }
                        function ye(e) {
                            var n = e || (b.config.altInput ? b.config.altFormat : b.config.dateFormat);
                            return b.selectedDates
                                .map(function (e) {
                                    return b.formatDate(e, n);
                                })
                                .filter(function (e, n, t) {
                                    return "range" !== b.config.mode || b.config.enableTime || t.indexOf(e) === n;
                                })
                                .join("range" !== b.config.mode ? b.config.conjunction : b.l10n.rangeSeparator);
                        }
                        function Ce(e) {
                            void 0 === e && (e = !0),
                                void 0 !== b.mobileInput && b.mobileFormatStr && (b.mobileInput.value = void 0 !== b.latestSelectedDateObj ? b.formatDate(b.latestSelectedDateObj, b.mobileFormatStr) : ""),
                                (b.input.value = ye(b.config.dateFormat)),
                                void 0 !== b.altInput && (b.altInput.value = ye(b.config.altFormat)),
                                !1 !== e && De("onValueUpdate");
                        }
                        function xe(e) {
                            var n = g(e),
                                t = b.prevMonthNav.contains(n),
                                a = b.nextMonthNav.contains(n);
                            t || a ? Z(t ? -1 : 1) : b.yearElements.indexOf(n) >= 0 ? n.select() : n.classList.contains("arrowUp") ? b.changeYear(b.currentYear + 1) : n.classList.contains("arrowDown") && b.changeYear(b.currentYear - 1);
                        }
                        return (
                            (function () {
                                (b.element = b.input = p),
                                    (b.isOpen = !1),
                                    (function () {
                                        var n = [
                                                "wrap",
                                                "weekNumbers",
                                                "allowInput",
                                                "allowInvalidPreload",
                                                "clickOpens",
                                                "time_24hr",
                                                "enableTime",
                                                "noCalendar",
                                                "altInput",
                                                "shorthandCurrentMonth",
                                                "inline",
                                                "static",
                                                "enableSeconds",
                                                "disableMobile",
                                            ],
                                            i = e(e({}, JSON.parse(JSON.stringify(p.dataset || {}))), v),
                                            o = {};
                                        (b.config.parseDate = i.parseDate),
                                            (b.config.formatDate = i.formatDate),
                                            Object.defineProperty(b.config, "enable", {
                                                get: function () {
                                                    return b.config._enable;
                                                },
                                                set: function (e) {
                                                    b.config._enable = he(e);
                                                },
                                            }),
                                            Object.defineProperty(b.config, "disable", {
                                                get: function () {
                                                    return b.config._disable;
                                                },
                                                set: function (e) {
                                                    b.config._disable = he(e);
                                                },
                                            });
                                        var r = "time" === i.mode;
                                        if (!i.dateFormat && (i.enableTime || r)) {
                                            var l = S.defaultConfig.dateFormat || a.dateFormat;
                                            o.dateFormat = i.noCalendar || r ? "H:i" + (i.enableSeconds ? ":S" : "") : l + " H:i" + (i.enableSeconds ? ":S" : "");
                                        }
                                        if (i.altInput && (i.enableTime || r) && !i.altFormat) {
                                            var s = S.defaultConfig.altFormat || a.altFormat;
                                            o.altFormat = i.noCalendar || r ? "h:i" + (i.enableSeconds ? ":S K" : " K") : s + " h:i" + (i.enableSeconds ? ":S" : "") + " K";
                                        }
                                        Object.defineProperty(b.config, "minDate", {
                                            get: function () {
                                                return b.config._minDate;
                                            },
                                            set: le("min"),
                                        }),
                                            Object.defineProperty(b.config, "maxDate", {
                                                get: function () {
                                                    return b.config._maxDate;
                                                },
                                                set: le("max"),
                                            });
                                        var d = function (e) {
                                            return function (n) {
                                                b.config["min" === e ? "_minTime" : "_maxTime"] = b.parseDate(n, "H:i:S");
                                            };
                                        };
                                        Object.defineProperty(b.config, "minTime", {
                                            get: function () {
                                                return b.config._minTime;
                                            },
                                            set: d("min"),
                                        }),
                                            Object.defineProperty(b.config, "maxTime", {
                                                get: function () {
                                                    return b.config._maxTime;
                                                },
                                                set: d("max"),
                                            }),
                                            "time" === i.mode && ((b.config.noCalendar = !0), (b.config.enableTime = !0)),
                                            Object.assign(b.config, o, i);
                                        for (var u = 0; u < n.length; u++) b.config[n[u]] = !0 === b.config[n[u]] || "true" === b.config[n[u]];
                                        for (
                                            t
                                                .filter(function (e) {
                                                    return void 0 !== b.config[e];
                                                })
                                                .forEach(function (e) {
                                                    b.config[e] = c(b.config[e] || []).map(T);
                                                }),
                                                b.isMobile =
                                                    !b.config.disableMobile &&
                                                    !b.config.inline &&
                                                    "single" === b.config.mode &&
                                                    !b.config.disable.length &&
                                                    !b.config.enable &&
                                                    !b.config.weekNumbers &&
                                                    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
                                                u = 0;
                                            u < b.config.plugins.length;
                                            u++
                                        ) {
                                            var f = b.config.plugins[u](b) || {};
                                            for (var m in f) t.indexOf(m) > -1 ? (b.config[m] = c(f[m]).map(T).concat(b.config[m])) : void 0 === i[m] && (b.config[m] = f[m]);
                                        }
                                        i.altInputClass || (b.config.altInputClass = ce().className + " " + b.config.altInputClass), De("onParseConfig");
                                    })(),
                                    se(),
                                    (b.input = ce()),
                                    b.input
                                        ? ((b.input._type = b.input.type),
                                          (b.input.type = "text"),
                                          b.input.classList.add("flatpickr-input"),
                                          (b._input = b.input),
                                          b.config.altInput &&
                                              ((b.altInput = d(b.input.nodeName, b.config.altInputClass)),
                                              (b._input = b.altInput),
                                              (b.altInput.placeholder = b.input.placeholder),
                                              (b.altInput.disabled = b.input.disabled),
                                              (b.altInput.required = b.input.required),
                                              (b.altInput.tabIndex = b.input.tabIndex),
                                              (b.altInput.type = "text"),
                                              b.input.setAttribute("type", "hidden"),
                                              !b.config.static && b.input.parentNode && b.input.parentNode.insertBefore(b.altInput, b.input.nextSibling)),
                                          b.config.allowInput || b._input.setAttribute("readonly", "readonly"),
                                          ve())
                                        : b.config.errorHandler(new Error("Invalid input element specified")),
                                    (function () {
                                        (b.selectedDates = []), (b.now = b.parseDate(b.config.now) || new Date());
                                        var e = b.config.defaultDate || (("INPUT" !== b.input.nodeName && "TEXTAREA" !== b.input.nodeName) || !b.input.placeholder || b.input.value !== b.input.placeholder ? b.input.value : null);
                                        e && pe(e, b.config.dateFormat),
                                            (b._initialDate =
                                                b.selectedDates.length > 0
                                                    ? b.selectedDates[0]
                                                    : b.config.minDate && b.config.minDate.getTime() > b.now.getTime()
                                                    ? b.config.minDate
                                                    : b.config.maxDate && b.config.maxDate.getTime() < b.now.getTime()
                                                    ? b.config.maxDate
                                                    : b.now),
                                            (b.currentYear = b._initialDate.getFullYear()),
                                            (b.currentMonth = b._initialDate.getMonth()),
                                            b.selectedDates.length > 0 && (b.latestSelectedDateObj = b.selectedDates[0]),
                                            void 0 !== b.config.minTime && (b.config.minTime = b.parseDate(b.config.minTime, "H:i")),
                                            void 0 !== b.config.maxTime && (b.config.maxTime = b.parseDate(b.config.maxTime, "H:i")),
                                            (b.minDateHasTime = !!b.config.minDate && (b.config.minDate.getHours() > 0 || b.config.minDate.getMinutes() > 0 || b.config.minDate.getSeconds() > 0)),
                                            (b.maxDateHasTime = !!b.config.maxDate && (b.config.maxDate.getHours() > 0 || b.config.maxDate.getMinutes() > 0 || b.config.maxDate.getSeconds() > 0));
                                    })(),
                                    (b.utils = {
                                        getDaysInMonth: function (e, n) {
                                            return void 0 === e && (e = b.currentMonth), void 0 === n && (n = b.currentYear), 1 === e && ((n % 4 == 0 && n % 100 != 0) || n % 400 == 0) ? 29 : b.l10n.daysInMonth[e];
                                        },
                                    }),
                                    b.isMobile ||
                                        (function () {
                                            var e = window.document.createDocumentFragment();
                                            if (((b.calendarContainer = d("div", "flatpickr-calendar")), (b.calendarContainer.tabIndex = -1), !b.config.noCalendar)) {
                                                if (
                                                    (e.appendChild(
                                                        ((b.monthNav = d("div", "flatpickr-months")),
                                                        (b.yearElements = []),
                                                        (b.monthElements = []),
                                                        (b.prevMonthNav = d("span", "flatpickr-prev-month")),
                                                        (b.prevMonthNav.innerHTML = b.config.prevArrow),
                                                        (b.nextMonthNav = d("span", "flatpickr-next-month")),
                                                        (b.nextMonthNav.innerHTML = b.config.nextArrow),
                                                        V(),
                                                        Object.defineProperty(b, "_hidePrevMonthArrow", {
                                                            get: function () {
                                                                return b.__hidePrevMonthArrow;
                                                            },
                                                            set: function (e) {
                                                                b.__hidePrevMonthArrow !== e && (s(b.prevMonthNav, "flatpickr-disabled", e), (b.__hidePrevMonthArrow = e));
                                                            },
                                                        }),
                                                        Object.defineProperty(b, "_hideNextMonthArrow", {
                                                            get: function () {
                                                                return b.__hideNextMonthArrow;
                                                            },
                                                            set: function (e) {
                                                                b.__hideNextMonthArrow !== e && (s(b.nextMonthNav, "flatpickr-disabled", e), (b.__hideNextMonthArrow = e));
                                                            },
                                                        }),
                                                        (b.currentYearElement = b.yearElements[0]),
                                                        Me(),
                                                        b.monthNav)
                                                    ),
                                                    (b.innerContainer = d("div", "flatpickr-innerContainer")),
                                                    b.config.weekNumbers)
                                                ) {
                                                    var n = (function () {
                                                            b.calendarContainer.classList.add("hasWeeks");
                                                            var e = d("div", "flatpickr-weekwrapper");
                                                            e.appendChild(d("span", "flatpickr-weekday", b.l10n.weekAbbreviation));
                                                            var n = d("div", "flatpickr-weeks");
                                                            return e.appendChild(n), { weekWrapper: e, weekNumbers: n };
                                                        })(),
                                                        t = n.weekWrapper,
                                                        a = n.weekNumbers;
                                                    b.innerContainer.appendChild(t), (b.weekNumbers = a), (b.weekWrapper = t);
                                                }
                                                (b.rContainer = d("div", "flatpickr-rContainer")),
                                                    b.rContainer.appendChild(z()),
                                                    b.daysContainer || ((b.daysContainer = d("div", "flatpickr-days")), (b.daysContainer.tabIndex = -1)),
                                                    U(),
                                                    b.rContainer.appendChild(b.daysContainer),
                                                    b.innerContainer.appendChild(b.rContainer),
                                                    e.appendChild(b.innerContainer);
                                            }
                                            b.config.enableTime &&
                                                e.appendChild(
                                                    (function () {
                                                        b.calendarContainer.classList.add("hasTime"), b.config.noCalendar && b.calendarContainer.classList.add("noCalendar");
                                                        var e = E(b.config);
                                                        (b.timeContainer = d("div", "flatpickr-time")), (b.timeContainer.tabIndex = -1);
                                                        var n = d("span", "flatpickr-time-separator", ":"),
                                                            t = m("flatpickr-hour", { "aria-label": b.l10n.hourAriaLabel });
                                                        b.hourElement = t.getElementsByTagName("input")[0];
                                                        var a = m("flatpickr-minute", { "aria-label": b.l10n.minuteAriaLabel });
                                                        if (
                                                            ((b.minuteElement = a.getElementsByTagName("input")[0]),
                                                            (b.hourElement.tabIndex = b.minuteElement.tabIndex = -1),
                                                            (b.hourElement.value = o(
                                                                b.latestSelectedDateObj
                                                                    ? b.latestSelectedDateObj.getHours()
                                                                    : b.config.time_24hr
                                                                    ? e.hours
                                                                    : (function (e) {
                                                                          switch (e % 24) {
                                                                              case 0:
                                                                              case 12:
                                                                                  return 12;
                                                                              default:
                                                                                  return e % 12;
                                                                          }
                                                                      })(e.hours)
                                                            )),
                                                            (b.minuteElement.value = o(b.latestSelectedDateObj ? b.latestSelectedDateObj.getMinutes() : e.minutes)),
                                                            b.hourElement.setAttribute("step", b.config.hourIncrement.toString()),
                                                            b.minuteElement.setAttribute("step", b.config.minuteIncrement.toString()),
                                                            b.hourElement.setAttribute("min", b.config.time_24hr ? "0" : "1"),
                                                            b.hourElement.setAttribute("max", b.config.time_24hr ? "23" : "12"),
                                                            b.hourElement.setAttribute("maxlength", "2"),
                                                            b.minuteElement.setAttribute("min", "0"),
                                                            b.minuteElement.setAttribute("max", "59"),
                                                            b.minuteElement.setAttribute("maxlength", "2"),
                                                            b.timeContainer.appendChild(t),
                                                            b.timeContainer.appendChild(n),
                                                            b.timeContainer.appendChild(a),
                                                            b.config.time_24hr && b.timeContainer.classList.add("time24hr"),
                                                            b.config.enableSeconds)
                                                        ) {
                                                            b.timeContainer.classList.add("hasSeconds");
                                                            var i = m("flatpickr-second");
                                                            (b.secondElement = i.getElementsByTagName("input")[0]),
                                                                (b.secondElement.value = o(b.latestSelectedDateObj ? b.latestSelectedDateObj.getSeconds() : e.seconds)),
                                                                b.secondElement.setAttribute("step", b.minuteElement.getAttribute("step")),
                                                                b.secondElement.setAttribute("min", "0"),
                                                                b.secondElement.setAttribute("max", "59"),
                                                                b.secondElement.setAttribute("maxlength", "2"),
                                                                b.timeContainer.appendChild(d("span", "flatpickr-time-separator", ":")),
                                                                b.timeContainer.appendChild(i);
                                                        }
                                                        return (
                                                            b.config.time_24hr ||
                                                                ((b.amPM = d("span", "flatpickr-am-pm", b.l10n.amPM[r((b.latestSelectedDateObj ? b.hourElement.value : b.config.defaultHour) > 11)])),
                                                                (b.amPM.title = b.l10n.toggleTitle),
                                                                (b.amPM.tabIndex = -1),
                                                                b.timeContainer.appendChild(b.amPM)),
                                                            b.timeContainer
                                                        );
                                                    })()
                                                ),
                                                s(b.calendarContainer, "rangeMode", "range" === b.config.mode),
                                                s(b.calendarContainer, "animate", !0 === b.config.animate),
                                                s(b.calendarContainer, "multiMonth", b.config.showMonths > 1),
                                                b.calendarContainer.appendChild(e);
                                            var i = void 0 !== b.config.appendTo && void 0 !== b.config.appendTo.nodeType;
                                            if (
                                                (b.config.inline || b.config.static) &&
                                                (b.calendarContainer.classList.add(b.config.inline ? "inline" : "static"),
                                                b.config.inline &&
                                                    (!i && b.element.parentNode
                                                        ? b.element.parentNode.insertBefore(b.calendarContainer, b._input.nextSibling)
                                                        : void 0 !== b.config.appendTo && b.config.appendTo.appendChild(b.calendarContainer)),
                                                b.config.static)
                                            ) {
                                                var l = d("div", "flatpickr-wrapper");
                                                b.element.parentNode && b.element.parentNode.insertBefore(l, b.element), l.appendChild(b.element), b.altInput && l.appendChild(b.altInput), l.appendChild(b.calendarContainer);
                                            }
                                            b.config.static || b.config.inline || (void 0 !== b.config.appendTo ? b.config.appendTo : window.document.body).appendChild(b.calendarContainer);
                                        })(),
                                    (function () {
                                        if (
                                            (b.config.wrap &&
                                                ["open", "close", "toggle", "clear"].forEach(function (e) {
                                                    Array.prototype.forEach.call(b.element.querySelectorAll("[data-" + e + "]"), function (n) {
                                                        return P(n, "click", b[e]);
                                                    });
                                                }),
                                            b.isMobile)
                                        )
                                            !(function () {
                                                var e = b.config.enableTime ? (b.config.noCalendar ? "time" : "datetime-local") : "date";
                                                (b.mobileInput = d("input", b.input.className + " flatpickr-mobile")),
                                                    (b.mobileInput.tabIndex = 1),
                                                    (b.mobileInput.type = e),
                                                    (b.mobileInput.disabled = b.input.disabled),
                                                    (b.mobileInput.required = b.input.required),
                                                    (b.mobileInput.placeholder = b.input.placeholder),
                                                    (b.mobileFormatStr = "datetime-local" === e ? "Y-m-d\\TH:i:S" : "date" === e ? "Y-m-d" : "H:i:S"),
                                                    b.selectedDates.length > 0 && (b.mobileInput.defaultValue = b.mobileInput.value = b.formatDate(b.selectedDates[0], b.mobileFormatStr)),
                                                    b.config.minDate && (b.mobileInput.min = b.formatDate(b.config.minDate, "Y-m-d")),
                                                    b.config.maxDate && (b.mobileInput.max = b.formatDate(b.config.maxDate, "Y-m-d")),
                                                    b.input.getAttribute("step") && (b.mobileInput.step = String(b.input.getAttribute("step"))),
                                                    (b.input.type = "hidden"),
                                                    void 0 !== b.altInput && (b.altInput.type = "hidden");
                                                try {
                                                    b.input.parentNode && b.input.parentNode.insertBefore(b.mobileInput, b.input.nextSibling);
                                                } catch (e) {}
                                                P(b.mobileInput, "change", function (e) {
                                                    b.setDate(g(e).value, !1, b.mobileFormatStr), De("onChange"), De("onClose");
                                                });
                                            })();
                                        else {
                                            var e = l(re, 50);
                                            if (
                                                ((b._debouncedChange = l(Y, 300)),
                                                b.daysContainer &&
                                                    !/iPhone|iPad|iPod/i.test(navigator.userAgent) &&
                                                    P(b.daysContainer, "mouseover", function (e) {
                                                        "range" === b.config.mode && oe(g(e));
                                                    }),
                                                P(b._input, "keydown", ie),
                                                void 0 !== b.calendarContainer && P(b.calendarContainer, "keydown", ie),
                                                b.config.inline || b.config.static || P(window, "resize", e),
                                                void 0 !== window.ontouchstart ? P(window.document, "touchstart", X) : P(window.document, "mousedown", X),
                                                P(window.document, "focus", X, { capture: !0 }),
                                                !0 === b.config.clickOpens && (P(b._input, "focus", b.open), P(b._input, "click", b.open)),
                                                void 0 !== b.daysContainer && (P(b.monthNav, "click", xe), P(b.monthNav, ["keyup", "increment"], N), P(b.daysContainer, "click", me)),
                                                void 0 !== b.timeContainer && void 0 !== b.minuteElement && void 0 !== b.hourElement)
                                            ) {
                                                var n = function (e) {
                                                    return g(e).select();
                                                };
                                                P(b.timeContainer, ["increment"], I),
                                                    P(b.timeContainer, "blur", I, { capture: !0 }),
                                                    P(b.timeContainer, "click", H),
                                                    P([b.hourElement, b.minuteElement], ["focus", "click"], n),
                                                    void 0 !== b.secondElement &&
                                                        P(b.secondElement, "focus", function () {
                                                            return b.secondElement && b.secondElement.select();
                                                        }),
                                                    void 0 !== b.amPM &&
                                                        P(b.amPM, "click", function (e) {
                                                            I(e);
                                                        });
                                            }
                                            b.config.allowInput && P(b._input, "blur", ae);
                                        }
                                    })(),
                                    (b.selectedDates.length || b.config.noCalendar) && (b.config.enableTime && F(b.config.noCalendar ? b.latestSelectedDateObj : void 0), Ce(!1)),
                                    _();
                                var n = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
                                !b.isMobile && n && de(), De("onReady");
                            })(),
                            b
                        );
                    }
                    function T(e, n) {
                        for (
                            var t = Array.prototype.slice.call(e).filter(function (e) {
                                    return e instanceof HTMLElement;
                                }),
                                a = [],
                                i = 0;
                            i < t.length;
                            i++
                        ) {
                            var o = t[i];
                            try {
                                if (null !== o.getAttribute("data-fp-omit")) continue;
                                void 0 !== o._flatpickr && (o._flatpickr.destroy(), (o._flatpickr = void 0)), (o._flatpickr = k(o, n || {})), a.push(o._flatpickr);
                            } catch (e) {
                                console.error(e);
                            }
                        }
                        return 1 === a.length ? a[0] : a;
                    }
                    "undefined" != typeof HTMLElement &&
                        "undefined" != typeof HTMLCollection &&
                        "undefined" != typeof NodeList &&
                        ((HTMLCollection.prototype.flatpickr = NodeList.prototype.flatpickr = function (e) {
                            return T(this, e);
                        }),
                        (HTMLElement.prototype.flatpickr = function (e) {
                            return T([this], e);
                        }));
                    var S = function (e, n) {
                        return "string" == typeof e ? T(window.document.querySelectorAll(e), n) : e instanceof Node ? T([e], n) : T(e, n);
                    };
                    return (
                        (S.defaultConfig = {}),
                        (S.l10ns = { en: e({}, i), default: e({}, i) }),
                        (S.localize = function (n) {
                            S.l10ns.default = e(e({}, S.l10ns.default), n);
                        }),
                        (S.setDefaults = function (n) {
                            S.defaultConfig = e(e({}, S.defaultConfig), n);
                        }),
                        (S.parseDate = M({})),
                        (S.formatDate = w({})),
                        (S.compareDates = y),
                        "undefined" != typeof jQuery &&
                            void 0 !== jQuery.fn &&
                            (jQuery.fn.flatpickr = function (e) {
                                return T(this, e);
                            }),
                        (Date.prototype.fp_incr = function (e) {
                            return new Date(this.getFullYear(), this.getMonth(), this.getDate() + ("string" == typeof e ? parseInt(e, 10) : e));
                        }),
                        "undefined" != typeof window && (window.flatpickr = S),
                        S
                    );
                })();
            },
        },
        n = {};
    function t(a) {
        var i = n[a];
        if (void 0 !== i) return i.exports;
        var o = (n[a] = { exports: {} });
        return e[a].call(o.exports, o, o.exports, t), o.exports;
    }
    (t.n = function (e) {
        var n =
            e && e.__esModule
                ? function () {
                      return e.default;
                  }
                : function () {
                      return e;
                  };
        return t.d(n, { a: n }), n;
    }),
        (t.d = function (e, n) {
            for (var a in n) t.o(n, a) && !t.o(e, a) && Object.defineProperty(e, a, { enumerable: !0, get: n[a] });
        }),
        (t.o = function (e, n) {
            return Object.prototype.hasOwnProperty.call(e, n);
        }),
        (t.r = function (e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
        });
    var a = {};
    !(function () {
        "use strict";
        t.r(a),
            t.d(a, {
                flatpickr: function () {
                    return e;
                },
            });
        var e = t(4953);
    })();
    var i = window;
    for (var o in a) i[o] = a[o];
    a.__esModule && Object.defineProperty(i, "__esModule", { value: !0 });
})();
