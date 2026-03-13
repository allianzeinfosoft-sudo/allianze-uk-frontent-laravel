<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Technical Issue</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Instrument+Serif:ital@0;1&family=Fragment+Mono:ital@0;1&display=swap" rel="stylesheet"/>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}

:root{
  --cream:#f5f0e8;
  --ink:#1a1410;
  --red:#c8392b;
  --red-light:#e8d5d2;
  --gold:#c8a84b;
  --mid:#7a6e62;
  --paper:#ede8dc;
}

html,body{height:100%;overflow:hidden;cursor:none}

body{
  background:var(--cream);
  color:var(--ink);
  font-family:'Fragment Mono',monospace;
  position:relative;
}

body::before{
  content:'';
  position:fixed;inset:0;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  pointer-events:none;z-index:100;opacity:.7;
}

.cursor{
  position:fixed;width:12px;height:12px;
  background:var(--red);border-radius:50%;
  pointer-events:none;z-index:9999;
  transform:translate(-50%,-50%);
  transition:width .15s,height .15s;
  mix-blend-mode:multiply;
}
.cursor-ring{
  position:fixed;width:36px;height:36px;
  border:1.5px solid var(--ink);border-radius:50%;
  pointer-events:none;z-index:9998;
  transform:translate(-50%,-50%);
}

canvas{position:fixed;inset:0;pointer-events:none;z-index:0;}

.page{
  position:relative;z-index:1;
  display:grid;
  grid-template-columns:1fr 1fr;
  grid-template-rows:auto 1fr auto;
  min-height:100vh;
  padding:3rem 4rem;
}

.topbar{
  grid-column:1/-1;
  display:flex;justify-content:space-between;align-items:flex-start;
  border-bottom:1.5px solid var(--ink);
  padding-bottom:1.25rem;
  animation:fadeUp .6s ease both;
}

.topbar-left{
  font-size:.62rem;letter-spacing:.18em;
  text-transform:uppercase;color:var(--mid);line-height:2;
}

.topbar-right{
  text-align:right;font-size:.62rem;letter-spacing:.12em;
  color:var(--mid);line-height:2;
}

.live-dot{
  display:inline-block;width:6px;height:6px;
  background:var(--red);border-radius:50%;
  margin-right:.4rem;vertical-align:middle;
  animation:blink 1.4s step-end infinite;
}
@keyframes blink{0%,100%{opacity:1}50%{opacity:0}}

.left{
  grid-column:1;grid-row:2;
  display:flex;flex-direction:column;justify-content:center;
  padding-right:3rem;
  border-right:1.5px solid var(--ink);
  padding-top:3rem;padding-bottom:3rem;
}

.big-number{
  font-family:'Bebas Neue',sans-serif;
  font-size:clamp(8rem,18vw,16rem);
  line-height:.85;
  color:var(--cream);
  -webkit-text-stroke:2px var(--ink);
  letter-spacing:-.02em;
  position:relative;
  animation:slideLeft .8s cubic-bezier(.16,1,.3,1) .1s both;
  user-select:none;
}

.big-number::after{
  content:'503';
  position:absolute;top:6px;left:6px;
  color:var(--red-light);
  -webkit-text-stroke:2px var(--red);
  z-index:-1;
}

.headline{
  font-family:'Instrument Serif',serif;
  font-style:italic;
  font-size:clamp(1.6rem,3vw,2.6rem);
  line-height:1.2;
  margin-top:1.5rem;
  animation:slideLeft .8s cubic-bezier(.16,1,.3,1) .2s both;
}

.headline strong{
  font-style:normal;
  font-family:'Bebas Neue',sans-serif;
  font-size:1.1em;
  letter-spacing:.04em;
  color:var(--red);
}

.tagline{
  margin-top:2rem;
  font-size:.72rem;letter-spacing:.08em;
  color:var(--mid);line-height:1.9;
  max-width:340px;
  animation:slideLeft .8s cubic-bezier(.16,1,.3,1) .3s both;
}

.slash{
  font-family:'Bebas Neue',sans-serif;
  font-size:4rem;color:var(--red);
  line-height:1;margin-top:2.5rem;
  animation:slideLeft .8s cubic-bezier(.16,1,.3,1) .35s both;
  opacity:.35;letter-spacing:-.05em;
}

.right{
  grid-column:2;grid-row:2;
  display:flex;flex-direction:column;justify-content:center;
  padding-left:3rem;
  padding-top:3rem;padding-bottom:3rem;
}

.status-label{
  font-size:.6rem;letter-spacing:.22em;text-transform:uppercase;
  color:var(--mid);margin-bottom:1.25rem;
  animation:fadeUp .6s .3s ease both;
}

.status-rows{
  display:flex;flex-direction:column;gap:.6rem;
  margin-bottom:2.5rem;
  animation:fadeUp .6s .35s ease both;
}

.row{
  display:flex;align-items:center;gap:1rem;
  padding:.65rem .9rem;
  border:1px solid transparent;
  position:relative;overflow:hidden;
  font-size:.68rem;letter-spacing:.06em;
  transition:border-color .25s;
}
.row::before{
  content:'';position:absolute;inset:0;
  background:var(--ink);opacity:.04;
}
.row:hover{border-color:var(--ink);}
.row-icon{font-size:.9rem;width:1.4rem;flex-shrink:0;}
.row-key{flex:1;color:var(--mid);}
.row-val{font-size:.65rem;}
.row-val.err{color:var(--red);}
.row-val.warn{color:var(--gold);}
.row-val.ok{color:#4a8c5c;}

.h-rule{
  height:1px;background:var(--ink);margin-bottom:2rem;
  animation:scaleX .8s .4s ease both;transform-origin:left;
}
@keyframes scaleX{from{transform:scaleX(0)}to{transform:scaleX(1)}}

.btn{
  display:inline-flex;align-items:center;gap:.75rem;
  background:var(--ink);color:var(--cream);
  border:none;
  font-family:'Fragment Mono',monospace;
  font-size:.68rem;letter-spacing:.16em;text-transform:uppercase;
  padding:.85rem 1.75rem;cursor:none;
  position:relative;overflow:hidden;
  transition:color .3s;
  animation:fadeUp .6s .5s ease both;align-self:flex-start;
}
.btn::before{
  content:'';position:absolute;inset:0;
  background:var(--red);transform:translateX(-101%);
  transition:transform .35s cubic-bezier(.16,1,.3,1);
}
.btn:hover::before{transform:translateX(0);}
.btn:hover .btn-arrow{transform:translateX(4px);}
.btn span,.btn-arrow{position:relative;z-index:1;}
.btn-arrow{transition:transform .25s;display:inline-block;}

.note{
  margin-top:1.75rem;padding:.9rem 1.1rem;
  border-left:3px solid var(--gold);
  background:rgba(200,168,75,.07);
  font-size:.65rem;line-height:1.9;color:var(--mid);
  animation:fadeUp .6s .55s ease both;
}
.note strong{
  color:var(--ink);font-weight:normal;
  font-family:'Instrument Serif',serif;
  font-style:italic;font-size:.8rem;
}

.bottom{
  grid-column:1/-1;
  display:flex;justify-content:space-between;align-items:center;
  border-top:1.5px solid var(--ink);padding-top:1.25rem;
  animation:fadeUp .6s .6s ease both;
}
.bottom-left,.bottom-right{font-size:.6rem;letter-spacing:.15em;color:var(--mid);text-transform:uppercase;}

.bg-text{
  position:fixed;bottom:-2rem;right:-1rem;
  font-family:'Bebas Neue',sans-serif;
  font-size:22vw;color:transparent;
  -webkit-text-stroke:1px rgba(26,20,16,.06);
  line-height:1;pointer-events:none;z-index:0;
  user-select:none;letter-spacing:-.02em;
}

.marquee-wrap{
  position:fixed;bottom:5.5rem;left:0;right:0;
  overflow:hidden;pointer-events:none;z-index:0;opacity:.08;
}
.marquee{
  display:flex;gap:3rem;white-space:nowrap;
  font-family:'Bebas Neue',sans-serif;
  font-size:1.1rem;letter-spacing:.2em;color:var(--ink);
  animation:marquee 18s linear infinite;
}
@keyframes marquee{from{transform:translateX(0)}to{transform:translateX(-50%)}}

@keyframes fadeUp{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:translateY(0)}}
@keyframes slideLeft{from{opacity:0;transform:translateX(-24px)}to{opacity:1;transform:translateX(0)}}

.big-number:hover{animation:glitch .4s steps(2,end) both;}
@keyframes glitch{
  0%{transform:none}20%{transform:translate(-3px,1px) skewX(-2deg)}
  40%{transform:translate(3px,-1px) skewX(2deg)}60%{transform:translate(-2px,2px)}
  80%{transform:translate(2px,-2px)}100%{transform:none}
}
</style>
</head>
<body>

<div class="cursor" id="cur"></div>
<div class="cursor-ring" id="ring"></div>
<canvas id="c"></canvas>
<div class="bg-text">ERR</div>

<div class="marquee-wrap">
  <div class="marquee">
    TECHNICAL ISSUE &nbsp;·&nbsp; SERVICE UNAVAILABLE &nbsp;·&nbsp; PLEASE STAND BY &nbsp;·&nbsp; TECHNICAL ISSUE &nbsp;·&nbsp; SERVICE UNAVAILABLE &nbsp;·&nbsp; PLEASE STAND BY &nbsp;·&nbsp; TECHNICAL ISSUE &nbsp;·&nbsp; SERVICE UNAVAILABLE &nbsp;·&nbsp; PLEASE STAND BY &nbsp;·&nbsp; TECHNICAL ISSUE &nbsp;·&nbsp; SERVICE UNAVAILABLE &nbsp;·&nbsp; PLEASE STAND BY &nbsp;·&nbsp;
  </div>
</div>

<div class="page">

  <div class="topbar">
    <div class="topbar-left">
      <span class="live-dot"></span>INCIDENT ACTIVE<br/>
      System Operations / Error Response
    </div>
    <div class="topbar-right">
      <span id="clock">--:--:-- UTC</span><br/>
      <span id="incid">INC–––––––</span>
    </div>
  </div>

  <div class="left">
    <div class="big-number">503</div>
    <div class="headline">
      <strong>Technical</strong><br/>
      Issue Detected
    </div>
    <p class="tagline">
      Our systems have encountered an unexpected fault.<br/>
      Engineers have been notified.<br/>
      We apologize for the inconvenience.
    </p>
    <div class="slash">/// ///</div>
  </div>

  <div class="right">
    <div class="status-label">Diagnostic Report</div>
    <div class="status-rows">
      <div class="row"><span class="row-icon">◈</span><span class="row-key">HTTP Status</span><span class="row-val err">503 Service Unavailable</span></div>
      <div class="row"><span class="row-icon">◈</span><span class="row-key">Origin Server</span><span class="row-val err">Unreachable</span></div>
      <div class="row"><span class="row-icon">◈</span><span class="row-key">Load Balancer</span><span class="row-val warn">Degraded</span></div>
      <div class="row"><span class="row-icon">◈</span><span class="row-key">CDN / Edge</span><span class="row-val ok">Operational</span></div>
      <div class="row"><span class="row-icon">◈</span><span class="row-key">On-call Team</span><span class="row-val ok">Notified</span></div>
    </div>
    <div class="h-rule"></div>
    <button class="btn" onclick="location.reload()">
      <span>Retry Request</span>
      <span class="btn-arrow">→</span>
    </button>
    <div class="note">
      <strong>"We are aware of the issue."</strong><br/>
      Our engineering team is actively investigating. Estimated resolution time is unknown. Check back shortly or contact support if the issue persists.
    </div>
  </div>

  <div class="bottom">
    <div class="bottom-left">© System Status Page</div>
    <div class="bottom-right" id="dateline">––– –– ––––</div>
  </div>

</div>

<script>
const cur=document.getElementById('cur');
const ring=document.getElementById('ring');
let mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',e=>{
  mx=e.clientX;my=e.clientY;
  cur.style.left=mx+'px';cur.style.top=my+'px';
});
(function animRing(){
  rx+=(mx-rx)*.12;ry+=(my-ry)*.12;
  ring.style.left=rx+'px';ring.style.top=ry+'px';
  requestAnimationFrame(animRing);
})();
document.querySelectorAll('button,.row').forEach(el=>{
  el.addEventListener('mouseenter',()=>{cur.style.width='20px';cur.style.height='20px';});
  el.addEventListener('mouseleave',()=>{cur.style.width='12px';cur.style.height='12px';});
});

const clock=document.getElementById('clock');
const incid=document.getElementById('incid');
const dateline=document.getElementById('dateline');
incid.textContent='INC-'+Math.random().toString(36).substr(2,8).toUpperCase();
const months=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
function tick(){
  const d=new Date();
  clock.textContent=d.toISOString().substring(11,19)+' UTC';
  dateline.textContent=d.getDate()+' '+months[d.getMonth()]+' '+d.getFullYear();
}
tick();setInterval(tick,1000);

const canvas=document.getElementById('c');
const ctx=canvas.getContext('2d');
let W,H,particles=[];
function resize(){W=canvas.width=window.innerWidth;H=canvas.height=window.innerHeight;}
resize();window.addEventListener('resize',resize);
function Particle(){
  this.reset=function(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.size=Math.random()*1.5+.5;
    this.vx=(Math.random()-.5)*.3;this.vy=(Math.random()-.5)*.3;
    this.alpha=Math.random()*.25+.05;
  };this.reset();
}
for(let i=0;i<55;i++){const p=new Particle();particles.push(p);}
function draw(){
  ctx.clearRect(0,0,W,H);
  particles.forEach(p=>{
    ctx.beginPath();ctx.arc(p.x,p.y,p.size,0,Math.PI*2);
    ctx.fillStyle=`rgba(200,57,43,${p.alpha})`;ctx.fill();
    p.x+=p.vx;p.y+=p.vy;
    if(p.x<0||p.x>W||p.y<0||p.y>H)p.reset();
  });
  for(let i=0;i<particles.length;i++){
    for(let j=i+1;j<particles.length;j++){
      const dx=particles[i].x-particles[j].x,dy=particles[i].y-particles[j].y;
      const d=Math.sqrt(dx*dx+dy*dy);
      if(d<90){
        ctx.beginPath();ctx.moveTo(particles[i].x,particles[i].y);ctx.lineTo(particles[j].x,particles[j].y);
        ctx.strokeStyle=`rgba(200,57,43,${.06*(1-d/90)})`;ctx.lineWidth=.5;ctx.stroke();
      }
    }
  }
  requestAnimationFrame(draw);
}
draw();
</script>
</body>
</html>