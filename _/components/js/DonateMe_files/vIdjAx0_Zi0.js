/*!CK:3044272318!*//*1396249765,178183207*/

if (self.CavalryLogger) { CavalryLogger.start_js(["pAfyc"]); }

__d("PopoverMenuContextMinWidth",["CSS","Style","copyProperties","cx","shield"],function(a,b,c,d,e,f,g,h,i,j,k){function l(m){"use strict";this._popoverMenu=m;this._popover=m.getPopover();}l.prototype.enable=function(){"use strict";this._setMenuSubscription=this._popoverMenu.subscribe('setMenu',k(this._onSetMenu,this));};l.prototype.disable=function(){"use strict";this._setMenuSubscription.unsubscribe();this._setMenuSubscription=null;if(this._showSubscription){this._showSubscription.unsubscribe();this._showSubscription=null;}if(this._menuSubscription){this._menuSubscription.unsubscribe();this._menuSubscription=null;}};l.prototype._onSetMenu=function(){"use strict";this._menu=this._popoverMenu.getMenu();this._showSubscription=this._popover.subscribe('show',k(this._updateWidth,this));var m=this._updateWidth.bind(this);this._menuSubscription=this._menu.subscribe(['change','resize'],function(){setTimeout(m,0);});this._updateWidth();};l.prototype._updateWidth=function(){"use strict";var m=this._menu.getRoot(),n=this._popoverMenu.getTriggerElem(),o=n.offsetWidth;h.set(m,'min-width',o+'px');g.conditionClass(m,"_575s",o>=m.offsetWidth);};i(l.prototype,{_setMenuSubscription:null,_showSubscription:null,_menuSubscription:null});e.exports=l;});
__d("ContextualLayerPositionClassOnContext",["CSS","copyProperties","cx"],function(a,b,c,d,e,f,g,h,i){function j(l){"use strict";this._layer=l;}j.prototype.enable=function(){"use strict";this._subscription=this._layer.subscribe('reposition',this._updateClassName.bind(this));if(this._layer.isShown())this._updateClassName();};j.prototype.disable=function(){"use strict";this._subscription.unsubscribe();this._subscription=null;if(this._prevClassName){g.removeClass(this._layer.getContext(),this._prevClassName);this._prevClassName=null;}};j.prototype._updateClassName=function(l,m){"use strict";var n=this._layer.getContext(),o=k(m);if(this._prevClassName){if(this._prevClassName===o)return;g.removeClass(n,this._prevClassName);}g.addClass(n,o);this._prevClassName=o;};function k(l){var m=l.getAlignment(),n=l.getPosition();if(n==='below'){if(m==='left'){return "_nk";}else if(m==='right'){return "_nl";}else return "_nm";}else if(n==='above'){if(m==='left'){return "_nn";}else if(m==='right'){return "_no";}else return "_np";}else if(n==='left'){return "_nq";}else return "_nr";}h(j.prototype,{_subscription:null,_prevClassName:null});e.exports=j;});