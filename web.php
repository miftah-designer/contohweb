<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>khusus </title>
  <style>
    :root{
      --bg:#fff9fb;
      --accent:#ff6b9a;
      --accent-2:#ffd166;
      --text:#3b2b46;
      --card:#ffffff;
      --shadow: 0 8px 30px rgba(59,43,70,0.08);
    }

    html,body{
      height:100%;
      margin:0;
      font-family: "Poppins", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background: linear-gradient(180deg, #fff9fb 0%, #f0f7ff 100%);
      color:var(--text);
      display:flex;
      align-items:center;
      justify-content:center;
      padding:24px;
      box-sizing:border-box;
    }

    .card{
      width: min(920px, 96vw);
      background:var(--card);
      border-radius:18px;
      padding:28px;
      box-shadow:var(--shadow);
      display:grid;
      grid-template-columns: 1fr 380px;
      gap:20px;
      align-items:center;
      overflow:visible;
      position:relative;
    }

    /* Left content */
    .left{
      padding-right:8px;
    }

    .headline{
      font-size:2.2rem;
      margin:0 0 8px;
      letter-spacing:-0.5px;
      display:flex;
      align-items:center;
      gap:12px;
    }

    .sub{
      margin:0 0 18px;
      color: #6b586f;
      line-height:1.4;
    }

    .cake{
      width:110px;
      height:110px;
      border-radius:18px;
      background:linear-gradient(180deg,#fff1f5,#ffd7e6);
      display:flex;
      align-items:center;
      justify-content:center;
      box-shadow: 0 6px 18px rgba(255,107,154,0.18);
      position:relative;
      margin:12px 0 18px;
      transform-origin:center;
      animation: floatCake 3s ease-in-out infinite;
    }

    @keyframes floatCake{
      0% { transform: translateY(0) rotate(-1deg); }
      50% { transform: translateY(-8px) rotate(2deg); }
      100% { transform: translateY(0) rotate(-1deg); }
    }

    /* little candle flame */
    .flame{
      width:10px;
      height:16px;
      background: linear-gradient(180deg,#ffd166,#ff9f1c);
      border-radius:50% 50% 40% 40%;
      position:absolute;
      top:-18px;
      box-shadow: 0 6px 14px rgba(255,160,60,0.45);
      filter:drop-shadow(0 2px 6px rgba(255,160,60,0.15));
      animation: flicker 800ms infinite;
    }
    @keyframes flicker{
      0%{ transform: scaleY(1) translateY(0); opacity:1; }
      50%{ transform: scaleY(1.06) translateY(-1px); opacity:0.95; }
      100%{ transform: scaleY(1) translateY(0); opacity:1; }
    }

    .btn-surprise{
      display:inline-flex;
      align-items:center;
      gap:10px;
      border:0;
      background:linear-gradient(90deg,var(--accent),#ff8fb6);
      color:white;
      padding:12px 18px;
      border-radius:12px;
      font-weight:600;
      cursor:pointer;
      box-shadow: 0 8px 18px rgba(255,107,154,0.18);
      transition: transform .15s ease, box-shadow .15s ease;
    }
    .btn-surprise:active{ transform: translateY(2px) scale(0.995); }

    .muted{
      font-size:.95rem;
      color:#7c6d7f;
      margin-top:10px;
    }

    /* Right column: scene with balloons */
    .scene{
      height:320px;
      background: linear-gradient(180deg,#fef2f8, #f9faff);
      border-radius:14px;
      padding:16px;
      display:flex;
      align-items:center;
      justify-content:center;
      position:relative;
      overflow:hidden;
    }

    .balloon{
      width:72px;
      height:94px;
      border-radius:60% 60% 50% 50%;
      position:absolute;
      bottom:-20%;
      display:flex;
      align-items:center;
      justify-content:center;
      transform-origin:center bottom;
      box-shadow: 0 12px 24px rgba(0,0,0,0.08);
    }
    .balloon::after{
      content:"";
      width:2px;
      height:60px;
      background:rgba(0,0,0,0.08);
      position:absolute;
      bottom:-60px;
      left:50%;
      transform:translateX(-50%);
    }

    /* different colors and animation offsets */
    .b1{ left:10%; background:linear-gradient(180deg,#ffd2e6,#ff9fb3); animation: floatUp 10s linear infinite; animation-delay:0s; transform: rotate(-8deg); }
    .b2{ left:32%; background:linear-gradient(180deg,#c9f0ff,#7ad3ff); width:58px; height:78px; animation: floatUp 8.6s linear infinite; animation-delay:1s; transform: rotate(6deg); }
    .b3{ left:54%; background:linear-gradient(180deg,#fff1c7,#ffd166); animation: floatUp 11s linear infinite; animation-delay:0.6s; transform: rotate(-4deg); }
    .b4{ left:74%; background:linear-gradient(180deg,#e8d9ff,#c7acff); width:64px; height:86px; animation: floatUp 9.3s linear infinite; animation-delay:1.6s; transform: rotate(10deg); }

    @keyframes floatUp{
      0%{ transform: translateY(0) rotate(0deg) scale(1); opacity:1; }
      40%{ transform: translateY(-40%) rotate(6deg) scale(1.02); opacity:1; }
      100%{ transform: translateY(-160%) rotate(18deg) scale(.9); opacity:0; }
    }

    /* Confetti pieces */
    .confetti {
      position:fixed;
      left:0;
      top:0;
      width:100%;
      height:100%;
      pointer-events:none;
      overflow:visible;
    }
    .confetti .piece {
      position:absolute;
      width:10px;
      height:16px;
      opacity:0;
      transform-origin:center;
      will-change:transform,opacity;
    }

    /* Surprise modal */
    .modal {
      position:fixed;
      inset:0;
      display:flex;
      align-items:center;
      justify-content:center;
      backdrop-filter: blur(4px) saturate(1.05);
      background: rgba(12,12,18,0.25);
      visibility:hidden;
      opacity:0;
      transition:opacity .22s ease, visibility .22s;
      z-index:1200;
    }
    .modal.show { visibility:visible; opacity:1; }
    .popup{
      background:linear-gradient(180deg,#fff,#fff7fd);
      padding:28px;
      border-radius:16px;
      box-shadow: 0 22px 60px rgba(45,28,75,0.2);
      text-align:center;
      max-width:520px;
      transform:translateY(12px) scale(.98);
      transition:transform .22s cubic-bezier(.16,.9,.32,1);
    }
    .modal.show .popup{ transform:translateY(0) scale(1); }

    .big-text{
      font-size:2.2rem;
      margin:10px 0 6px;
    }
    .cute{
      font-size:1rem;
      color:#6f5b66;
      margin-bottom:12px;
    }

    .close {
      border:0;
      background:transparent;
      color:#8b7a8e;
      font-weight:700;
      cursor:pointer;
      font-size:1rem;
      margin-top:8px;
    }

    /* responsive */
    @media (max-width:880px){
      .card{ grid-template-columns: 1fr; }
      .scene{ height:240px; margin-top:6px; }
    }
  </style>
</head>
<body>
  <div class="card" role="main" aria-labelledby="title">
    <div class="left">
      <h1 id="title" class="headline">
        🎈 Happy Birthday,ceu shofaaaaay🤣😜💕
      </h1>
      <p class="sub">✨بَارَكَ اللَّهُ فِي عُمْرِك✨</p>

      <div class="cake" aria-hidden="true">
        <div style="text-align:center">
          <svg width="80" height="60" viewBox="0 0 80 60" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <!-- cake base -->
            <rect x="6" y="22" width="68" height="30" rx="8" fill="#fff" stroke="#ff9fb3" stroke-width="2"/>
            <rect x="12" y="26" width="56" height="22" rx="6" fill="#ffd7e6"/>
            <!-- frosting -->
            <path d="M12 26c6-8 44-8 56 0v-2c-8-7-42-7-56 0z" fill="#fff4f8" opacity="0.9"/>
            <!-- candle -->
            <rect x="36" y="6" width="8" height="18" rx="2" fill="#ffd166"/>
          </svg>
        </div>
        <div class="flame" aria-hidden="true"></div>
      </div>

      <button class="btn-surprise" id="surpriseBtn" aria-controls="modal">
        🎉 pencet ieu🤣🤣🤣
      </button>

      <p class="muted">pencet😁☝️</p>
    </div>

    <div class="scene" aria-hidden="true">
      <div class="balloon b1" style="filter: drop-shadow(0 10px 18px rgba(255,130,160,0.12))"></div>
      <div class="balloon b2" style="filter: drop-shadow(0 10px 18px rgba(120,200,255,0.12))"></div>
      <div class="balloon b3" style="filter: drop-shadow(0 10px 18px rgba(255,210,100,0.12))"></div>
      <div class="balloon b4" style="filter: drop-shadow(0 10px 18px rgba(180,150,255,0.12))"></div>

      <!-- little cat face (cute) -->
      <svg width="180" height="140" viewBox="0 0 180 140" style="z-index:2" aria-hidden="true">
        <!-- ears -->
        <path d="M30 40 L18 14 Q36 6 48 28 Z" fill="#ffcad4"/>
        <path d="M150 40 L162 14 Q144 6 132 28 Z" fill="#ffcad4"/>
        <!-- head -->
        <ellipse cx="90" cy="68" rx="64" ry="56" fill="#fff" stroke="#ffd1e0" stroke-width="3"/>
        <!-- eyes -->
        <circle cx="72" cy="68" r="6" fill="#2e1f2f"/>
        <circle cx="108" cy="68" r="6" fill="#2e1f2f"/>
        <!-- nose -->
        <path d="M90 82 q6 8 0 12 q-6-4 0-12" fill="#ff9fb3"/>
        <!-- whiskers -->
        <path d="M34 78 h28" stroke="#d7a1b6" stroke-width="2" stroke-linecap="round"/>
        <path d="M34 86 h28" stroke="#d7a1b6" stroke-width="2" stroke-linecap="round"/>
        <path d="M146 78 h-28" stroke="#d7a1b6" stroke-width="2" stroke-linecap="round"/>
        <path d="M146 86 h-28" stroke="#d7a1b6" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </div>
  </div>

  <!-- confetti container -->
  <div class="confetti" id="confetti" aria-hidden="true"></div>

  <!-- modal surprise -->
  <div class="modal" id="modal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="popup" role="document">
      <div style="font-size:3.2rem">🎂</div>
      <div class="big-text" id="modalTitle">cieee anu dinten ayeuna ulang tahun🤣🤣cihuyyyyy😘</div>
      <div class="cute">maapnya teu acan tiasa masihan kadoo ayeunamah😅kur tiasa kieu weee gening🤣 aa ngado'a mudah-mudahan sehat selalu,panjang umur🥰😁,
         oge sing digampilkeun dina milari elmuna🤗❤sadaya tujuan sae na sing enggal  terwujud aamiin🤗🥰,,
          aa oge berharap dina nambihan nana usia dede ieu dede selalu di kelilingi ku rerencangan dede anu baik baik aamiin🤗😘, sing tambih-tambih dewasa😘🥰,, sing jadi anak anu bakti ka ibu rama kaa guru pokonamah sing jadi cewe anu shalehah we nya aamiin🤗🥰💕😁
         sing tambih-tambih kakiatana kangge ngajalankeun hari-hari di pondok.
lamun capek inget tujuana nyaaa😁, lamun rindu inget doa🤣😜, lamun bade nyerah inget mimpi besar anu atos nungguin dede di depan🤗😉
Pokoknya jangan pernah menyerah tetap semangaaaat! 💪💖</div>
      <button class="btn-surprise" id="closeBtn">udah segituh</button>
      <br/>
      <button class="big-text" id="singBtn">pencet heula ieu🤣🤣🤣</button>
    </div>
  </div>

  <script>
    // helper: random int
    function rnd(min,max){ return Math.floor(Math.random()*(max-min+1))+min; }

    // create confetti pieces
    const confettiRoot = document.getElementById('confetti');

    function makeConfettiBurst(xPercent = 50, yPercent = 30, count = 40){
      const colors = ["#ff9fb3","#ffd166","#7ad3ff","#c7acff","#ffd2e6","#fff1c7"];
      const w = window.innerWidth;
      const h = window.innerHeight;

      for(let i=0;i<count;i++){
        const el = document.createElement('div');
        el.className = 'piece';
        const cw = rnd(6,12);
        el.style.width = cw + 'px';
        el.style.height = rnd(10,20) + 'px';
        el.style.left = (xPercent/100 * w + rnd(-60,60)) + 'px';
        el.style.top = (yPercent/100 * h + rnd(-40,40)) + 'px';
        el.style.background = colors[i % colors.length];
        el.style.transform = `rotate(${rnd(0,360)}deg)`;
        confettiRoot.appendChild(el);

        // animate with JS for variety
        const dx = rnd(-300,300);
        const dy = rnd(100,700);
        const rot = rnd(-720,720);
        const duration = rnd(1400,2600);

        // animate using requestAnimationFrame
        const start = performance.now();
        el.style.opacity = 1;

        (function animate(now){
          const t = Math.min(1, (now - start)/duration);
          const ease = 1 - Math.pow(1-t,3); // ease out cubic
          el.style.transform = `translate(${dx * ease}px, ${dy * ease}px) rotate(${rot * ease}deg)`;
          el.style.opacity = String(1 - ease);
          if(t < 1) requestAnimationFrame(animate);
          else el.remove();
        })(start);
      }
    }

    // modal logic
    const btn = document.getElementById('surpriseBtn');
    const modal = document.getElementById('modal');
    const closeBtn = document.getElementById('closeBtn');
    const singBtn = document.getElementById('singBtn');

    btn.addEventListener('click', () => {
      modal.classList.add('show');
      modal.setAttribute('aria-hidden','false');
      // multiple bursts
      makeConfettiBurst(50,30,32);
      setTimeout(()=> makeConfettiBurst(30,40,18), 250);
      setTimeout(()=> makeConfettiBurst(70,40,18), 500);
      // little balloon pop sounds via web audio
      playPopMelody();
    });

    closeBtn.addEventListener('click', () => {
      modal.classList.remove('show');
      modal.setAttribute('aria-hidden','true');
    });

    // simple melody using WebAudio (no external audio)
    function playPopMelody(){
      try{
        const ctx = new (window.AudioContext || window.webkitAudioContext)();
        const now = ctx.currentTime;
        const notes = [880, 1047, 784, 659]; // A5, C6, G5, E5-ish
        notes.forEach((freq, i) => {
          const o = ctx.createOscillator();
          const g = ctx.createGain();
          o.type = 'sine';
          o.frequency.setValueAtTime(freq, now + i*0.12);
          g.gain.setValueAtTime(0.0001, now + i*0.12);
          g.gain.exponentialRampToValueAtTime(0.12, now + i*0.12 + 0.02);
          g.gain.exponentialRampToValueAtTime(0.0001, now + i*0.12 + 0.28);
          o.connect(g); g.connect(ctx.destination);
          o.start(now + i*0.12);
          o.stop(now + i*0.12 + 0.3);
        });
      }catch(e){
        // ignore if audio not supported
      }
    }

    // "nyanyikan lagu" - short happy birthday melody (simple)
   singBtn.addEventListener("click", () => {
    try {
      const ctx = new (window.AudioContext || window.webkitAudioContext)();
      let now = ctx.currentTime;

      // Nada & durasi lagu Happy Birthday (C mayor)
      const seq = [
        // "Happy birthday to you"
        [264, 0.2], [264, 0.2], [297, 0.5], [264, 0.5], [352, 0.5], [330, 1.0],
        // "Happy birthday to you"
        [264, 0.2], [264, 0.2], [297, 0.5], [264, 0.5], [396, 0.5], [352, 1.0],
        // "Happy birthday dear ..."
        [264, 0.2], [264, 0.2], [528, 0.5], [440, 0.5], [352, 0.2], [330, 0.5], [297, 1.0],
        // "Happy birthday to you"
        [466, 0.2], [466, 0.2], [440, 0.5], [352, 0.5], [396, 0.5], [352, 1.0]
      ];

      const repeatTimes = 5; // jumlah pengulangan

      for (let r = 0; r < repeatTimes; r++) {
        seq.forEach(([f, d]) => {
          const o = ctx.createOscillator();
          const g = ctx.createGain();
          o.type = "triangle"; // bisa ganti "sine" kalau mau lebih halus
          o.frequency.setValueAtTime(f, now);

          g.gain.setValueAtTime(0.0001, now);
          g.gain.exponentialRampToValueAtTime(0.12, now + 0.01);
          g.gain.exponentialRampToValueAtTime(0.0001, now + d);

          o.connect(g);
          g.connect(ctx.destination);

          o.start(now);
          o.stop(now + d);

          now += d;
        });
        now += 0.6; // jeda antar pengulangan
      }
    } catch (e) {
      console.error(e);
    }
  });

    // accessible: close modal on ESC
    document.addEventListener('keydown', (e) => {
      if(e.key === "Escape" && modal.classList.contains('show')){
        modal.classList.remove('show');
        modal.setAttribute('aria-hidden','true');
      }
    });

  </script>
</body>
</html>
