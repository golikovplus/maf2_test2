/**
 * @class Lead
 * @property {null|Number} id_lead
 * @property {null|String} location
 * @property {null|String} lead_type
 * @property {null|String} preferences
 * @property {null|String} price_range
 * @property {null|String} home_type
 * @property {null|String} time_frame
 * @property {null|String} agent_hero
 * @property {null|String} fullname
 * @property {null|String} email
 * @property {null|String} phone
 */
/**
 * @constructor
 */
function Lead() {
  this.id_lead = null;
  this.location = null;
  this.viewport = null;
  this.lead_type = null;
  this.preferences = null;
  this.price_range = null;
  this.home_type = null;
  this.time_frame = null;
  this.agent_hero = null;
  this.fullname = '';
  this.email = '';
  this.phone = '';
  this.status = null;
}
Lead.prototype = {};
Lead.prototype.save = function() {
  localStorage['lead'] = JSON.stringify(this);
};
Lead.prototype.load = function() {
  if (typeof localStorage['lead'] == 'undefined') return;
  var lead_obj = JSON.parse(localStorage['lead']);
  for (var key in lead_obj) {
    this[key] = lead_obj[key];
  }
};
window.Lead = Lead;
