/*!CK:134148111!*//*1392823365,178127449*/

if (self.CavalryLogger) { CavalryLogger.start_js(["mIu1K"]); }

__d("DeveloperSiteSaveNotifier",["$","CSS","cx","DOM","UIPagelet"],function(a,b,c,d,e,f,g,h,i,j,k){var l={notifyAndReload:function(m,n,o,p){this.reloadPageletInRelativeElement(m,n,o,p);window.scrollTo(0,0);this.toggleSaveBanner();setTimeout(this.toggleSaveBanner,5000);},reloadPageletInRelativeElement:function(m,n,o,p){this._reloadPagelet(m,j.find(n,o),p);},reloadPageletByID:function(m,n,o){this._reloadPagelet(m,g(n),o);},_reloadPagelet:function(m,n,o){var p={usePipe:true,subdomain:'developers',jsNonblock:true};k.loadFromEndpoint(m,n,o,p);},toggleSaveBanner:function(){h.toggleClass(j.find(document,'div.'+"_5kdv"),"_5kdw");}};e.exports=l;});