//
// these easing functions are based on the code of glsl-easing module.
// https://github.com/glslify/glsl-easings
//
var ease = {
    exponentialIn: function (t) {
        return t == 0.0 ? t : Math.pow(2.0, 10.0 * (t - 1.0));
    },
    exponentialOut: function (t) {
        return t == 1.0 ? t : 1.0 - Math.pow(2.0, -10.0 * t);
    },
    exponentialInOut: function (t) {
        return t == 0.0 || t == 1.0
            ? t
            : t < 0.5
                ? +0.5 * Math.pow(2.0, (20.0 * t) - 10.0)
                : -0.5 * Math.pow(2.0, 10.0 - (t * 20.0)) + 1.0;
    },
    sineOut: function (t) {
        var HALF_PI = 1.5707963267948966;
        return Math.sin(t * HALF_PI);
    },
    circularInOut: function (t) {
        return t < 0.5
            ? 0.5 * (1.0 - Math.sqrt(1.0 - 4.0 * t * t))
            : 0.5 * (Math.sqrt((3.0 - 2.0 * t) * (2.0 * t - 1.0)) + 1.0);
    },
    cubicIn: function (t) {
        return t * t * t;
    },
    cubicOut: function (t) {
        var f = t - 1.0;
        return f * f * f + 1.0;
    },
    cubicInOut: function (t) {
        return t < 0.5
            ? 4.0 * t * t * t
            : 0.5 * Math.pow(2.0 * t - 2.0, 3.0) + 1.0;
    },
    quadraticOut: function (t) {
        return -t * (t - 2.0);
    },
    quarticOut: function (t) {
        return Math.pow(t - 1.0, 3.0) * (1.0 - t) + 1.0;
    }
};
