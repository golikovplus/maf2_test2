/**
 * @class Testimonial
 * @property {null|Number} id
 * @property {null|String} name
 * @property {null|String} image
 * @property {null|String} message
 * @property {null|String} created_at
 */
/**
 * @constructor
 */
function Testimonial() {
    this.id = null;
    this.name = null;
    this.image = null;
    this.message = null;
    this.address = null;
    this.created_at = null;
}
Testimonial.prototype = {};

window.Testimonial = Testimonial;

