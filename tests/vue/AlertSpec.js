describe("Alert component", function() {

    var c = require('../../resources/assets/js/components/alert.vue');

    it('should have data', function () {
        expect(typeof c.data).toBe('function');
    });

    it('should be visible', function () {
        var defaultData = c.data();
        expect(defaultData.show).toBe(true);
    });

});
