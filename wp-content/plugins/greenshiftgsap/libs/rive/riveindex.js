"use strict";let gspbrivenow=document.getElementsByClassName("gs-riveloadnow");for(let i=0;i<gspbrivenow.length;i++){let e=gspbrivenow[i],t=e.querySelector("canvas"),a=t.getAttribute("data-statemachine"),s=t.getAttribute("data-artboard"),n=t.getAttribute("data-id");if(t&&"undefined"!=typeof rive){let r=new rive.Rive({src:t.getAttribute("data-src"),canvas:t,artboard:s,stateMachines:a,autoplay:!0,onLoad(t){e.classList.add("rive-loaded"),r.resizeDrawingSurfaceToCanvas();let s=a;if(!s&&r.stateMachineNames.length>0&&(s=r.stateMachineNames[0]),s){let l=r.stateMachineInputs(s);if(l.length>0&&void 0!==l)for(let o=0;o<l.length;o++){let d=l[o],g="stateMachineInput"+n+o;window[g]=d,console.log(g+" with name "+d.name+" is ready to use")}}let c="gsRIVE"+n;window[c]=r,console.log(c+" object is ready to use")}})}}