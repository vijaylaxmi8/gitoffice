(function(){const h=document.querySelector(".pickr-container"),m=document.querySelector(".theme-container"),p=document.querySelector(".pickr-container1"),g=document.querySelector(".theme-container1"),f=document.querySelector(".pickr-container2"),v=document.querySelector(".theme-container2"),k=[["classic",{swatches:["rgba(244, 67, 54, 1)","rgba(233, 30, 99, 0.95)","rgba(156, 39, 176, 0.9)","rgba(103, 58, 183, 0.85)","rgba(63, 81, 181, 0.8)","rgba(33, 150, 243, 0.75)","rgba(3, 169, 244, 0.7)","rgba(0, 188, 212, 0.7)","rgba(0, 150, 136, 0.75)","rgba(76, 175, 80, 0.8)","rgba(139, 195, 74, 0.85)","rgba(205, 220, 57, 0.9)","rgba(255, 235, 59, 0.95)","rgba(255, 193, 7, 1)"],components:{preview:!0,opacity:!0,hue:!0,interaction:{hex:!0,rgba:!0,hsva:!0,input:!0,clear:!0,save:!0}}}]],l=[];let r=null;for(const[o,a]of k){const n=document.createElement("button");n.innerHTML=o,l.push(n),n.addEventListener("click",()=>{const c=document.createElement("p");h.appendChild(c),r&&r.destroyAndRemove();for(const e of l)e.classList[e===n?"add":"remove"]("active","ti-btn","ti-btn-primary");r=new Pickr(Object.assign({el:c,theme:o,default:"#a68e5e"},a)),r.on("init",e=>{}).on("hide",e=>{}).on("show",(e,t)=>{}).on("save",(e,t)=>{}).on("clear",e=>{}).on("change",(e,t,b)=>{}).on("changestop",(e,t)=>{}).on("cancel",e=>{}).on("swatchselect",(e,t)=>{})}),m.appendChild(n)}l[0].click();const w=[["monolith",{swatches:["rgba(244, 67, 54, 1)","rgba(233, 30, 99, 0.95)","rgba(156, 39, 176, 0.9)","rgba(103, 58, 183, 0.85)","rgba(63, 81, 181, 0.8)","rgba(33, 150, 243, 0.75)","rgba(3, 169, 244, 0.7)"],defaultRepresentation:"HEXA",components:{preview:!0,opacity:!0,hue:!0,interaction:{hex:!1,rgba:!1,hsva:!1,input:!0,clear:!0,save:!0}}}]],u=[];let s=null;for(const[o,a]of w){const n=document.createElement("button");n.innerHTML=o,u.push(n),n.addEventListener("click",()=>{const c=document.createElement("p");p.appendChild(c),s&&s.destroyAndRemove();for(const e of u)e.classList[e===n?"add":"remove"]("active","ti-btn","ti-btn-primary");s=new Pickr(Object.assign({el:c,theme:o,default:"#d5dde7"},a)),s.on("init",e=>{}).on("hide",e=>{}).on("show",(e,t)=>{}).on("save",(e,t)=>{}).on("clear",e=>{}).on("change",(e,t,b)=>{}).on("changestop",(e,t)=>{}).on("cancel",e=>{}).on("swatchselect",(e,t)=>{})}),g.appendChild(n)}u[0].click();const y=[["nano",{swatches:["rgba(244, 67, 54, 1)","rgba(233, 30, 99, 0.95)","rgba(156, 39, 176, 0.9)","rgba(103, 58, 183, 0.85)","rgba(63, 81, 181, 0.8)","rgba(33, 150, 243, 0.75)","rgba(3, 169, 244, 0.7)"],defaultRepresentation:"HEXA",components:{preview:!0,opacity:!0,hue:!0,interaction:{hex:!1,rgba:!1,hsva:!1,input:!0,clear:!0,save:!0}}}]],d=[];let i=null;for(const[o,a]of y){const n=document.createElement("button");n.innerHTML=o,d.push(n),n.addEventListener("click",()=>{const c=document.createElement("p");f.appendChild(c),i&&i.destroyAndRemove();for(const e of d)e.classList[e===n?"add":"remove"]("active","ti-btn","ti-btn-primary");i=new Pickr(Object.assign({el:c,theme:o,default:"#b95d4b"},a)),i.on("init",e=>{}).on("hide",e=>{}).on("show",(e,t)=>{}).on("save",(e,t)=>{}).on("clear",e=>{}).on("change",(e,t,b)=>{}).on("changestop",(e,t)=>{}).on("cancel",e=>{}).on("swatchselect",(e,t)=>{})}),v.appendChild(n)}d[0].click()})();
