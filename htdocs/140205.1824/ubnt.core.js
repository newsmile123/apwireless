(function(){var b=this.ubnt||(this.ubnt={}),a=b.core||(b.core={});a.events={bind:function(g,f){var e=g.split(" "),d=this.evFns||(this.evFns={});for(var c=0;c<e.length;c++){(this.evFns[e[c]]||(this.evFns[e[c]]=[])).push(f)}return this},ubnind:function(g,f){var e,h;if(!(e=this.evFns)||!(h=e[g])){return this}if(f){for(var d=0,c=h.length;d<c;d++){if(f===h[d]){h.splice(d,1);break}}}else{delete this.evFns[g]}return this},trigger:function(f){var e,g;if(!(e=this.evFns)||!(g=e[f])){return this}for(var d=0,c=g.length;d<c;d++){g[d].apply(this,Array.prototype.slice.call(arguments,1))}return this}}})();