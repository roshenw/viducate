/*!CK:677862737!*//*1396272553,178183447*/

if (self.CavalryLogger) { CavalryLogger.start_js(["r\/PnR"]); }

__d("SearchableEntry",["HTML","invariant"],function(a,b,c,d,e,f,g,h){function i(k){switch(typeof k){case 'string':return k;case 'object':var l=g.replaceJSONWrapper(k);if(g.isHTML(l)){var m=l.getRootNode();return m.textContent||m.innerText||'';}else return '';default:return '';}}function j(k){"use strict";h(!!k.uniqueID&&(typeof k.uniqueID==='string'||typeof k.uniqueID==='number'));h(!!k.title&&typeof k.title==='string');this.$SearchableEntry0=k.uniqueID+'';this.$SearchableEntry1=k.title;this.$SearchableEntry2=k.order||0;this.$SearchableEntry3=i(k.subtitle);this.$SearchableEntry4=k.keywordString||'';this.$SearchableEntry5=k.photo||'';this.$SearchableEntry6=k.uri||'';this.$SearchableEntry7=k.type||'';this.$SearchableEntry8=k.auxiliaryData||null;}j.prototype.getUniqueID=function(){"use strict";return this.$SearchableEntry0;};j.prototype.getOrder=function(){"use strict";return this.$SearchableEntry2;};j.prototype.getTitle=function(){"use strict";return this.$SearchableEntry1;};j.prototype.getSubtitle=function(){"use strict";return this.$SearchableEntry3;};j.prototype.getKeywordString=function(){"use strict";return this.$SearchableEntry4;};j.prototype.getPhoto=function(){"use strict";return this.$SearchableEntry5;};j.prototype.getURI=function(){"use strict";return this.$SearchableEntry6;};j.prototype.getType=function(){"use strict";return this.$SearchableEntry7;};j.prototype.getAuxiliaryData=function(){"use strict";return this.$SearchableEntry8;};e.exports=j;});
__d("TypeaheadViewItem",["ReactPropTypes","SearchableEntry"],function(a,b,c,d,e,f,g,h){var i={entry:g.instanceOf(h).isRequired,highlighted:g.bool,selected:g.bool,onSelect:g.func.isRequired,onHighlight:g.func,onRenderHighlight:g.func},j={_onSelect:function(k){this.props.onSelect(this.props.entry,k);},_onHighlight:function(k){if(this.props.onHighlight)this.props.onHighlight(this.props.entry,k);},shouldComponentUpdate:function(k){return (this.props.entry.getUniqueID()!==k.entry.getUniqueID()||this.props.highlighted!==k.highlighted||this.props.selected!==k.selected);},componentDidMount:function(){if(this.props.highlighted&&this.props.onRenderHighlight)this.props.onRenderHighlight(this.getDOMNode());},componentDidUpdate:function(){if(this.props.highlighted&&this.props.onRenderHighlight)this.props.onRenderHighlight(this.getDOMNode());}};e.exports={propTypes:i,Mixin:j};});