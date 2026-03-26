<!-- Popup Notification System -->
<div id="popup-overlay" role="dialog" aria-modal="true"></div>
<div id="popup-modal">
    <button id="popup-close" onclick="Popup.dismiss()" aria-label="Close">&times;</button>
    <div id="popup-icon-wrap">
        <svg id="popup-svg-success" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
            <circle class="popup-circle" cx="60" cy="60" r="54" fill="none" stroke="#22c55e" stroke-width="6" stroke-linecap="round"/>
            <polyline class="popup-check" points="34,62 52,80 86,42" fill="none" stroke="#22c55e" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <svg id="popup-svg-error" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
            <circle class="popup-circle" cx="60" cy="60" r="54" fill="none" stroke="#ef4444" stroke-width="6" stroke-linecap="round"/>
            <line class="popup-cross-1" x1="40" y1="40" x2="80" y2="80" stroke="#ef4444" stroke-width="7" stroke-linecap="round"/>
            <line class="popup-cross-2" x1="80" y1="40" x2="40" y2="80" stroke="#ef4444" stroke-width="7" stroke-linecap="round"/>
        </svg>
        <svg id="popup-svg-warning" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
            <polygon class="popup-triangle" points="60,14 108,102 12,102" fill="none" stroke="#f59e0b" stroke-width="6" stroke-linejoin="round"/>
            <line class="popup-excl-line" x1="60" y1="46" x2="60" y2="72" stroke="#f59e0b" stroke-width="7" stroke-linecap="round"/>
            <circle class="popup-excl-dot" cx="60" cy="86" r="4.5" fill="#f59e0b"/>
        </svg>
        <svg id="popup-svg-info" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
            <circle class="popup-circle" cx="60" cy="60" r="54" fill="none" stroke="#3b82f6" stroke-width="6" stroke-linecap="round"/>
            <line class="popup-info-line" x1="60" y1="54" x2="60" y2="84" stroke="#3b82f6" stroke-width="7" stroke-linecap="round"/>
            <circle class="popup-info-dot" cx="60" cy="38" r="4.5" fill="#3b82f6"/>
        </svg>
    </div>
    <div id="popup-title"></div>
    <div id="popup-message"></div>
    <button id="popup-btn" onclick="Popup.dismiss()">OK</button>
    <div id="popup-progress-wrap"><div id="popup-progress-bar"></div></div>
</div>

<style>
    /* ── Overlay ── */
    #popup-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,.48);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        z-index: 99998;
    }

    /* ── Modal ── */
    #popup-modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(.85);
        z-index: 99999;
        background: #ffffff;
        border-radius: 24px;
        padding: 46px 40px 34px;
        width: min(440px, calc(100vw - 40px));
        text-align: center;
        box-shadow: 0 32px 80px rgba(0,0,0,.18), 0 4px 16px rgba(0,0,0,.08);
        overflow: hidden;
        opacity: 0;
        animation: popupZoomIn .35s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }
    #popup-modal.hide {
        animation: popupZoomOut .28s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }

    /* ── Close btn ── */
    #popup-close {
        position: absolute;
        top: 14px; right: 16px;
        background: #f3f4f6;
        border: none;
        border-radius: 50%;
        width: 34px; height: 34px;
        font-size: 20px;
        line-height: 1;
        cursor: pointer;
        color: #9ca3af;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background .15s, color .15s;
    }
    #popup-close:hover { background: #e5e7eb; color: #374151; }

    /* ── Icon wrapper ── */
    #popup-icon-wrap {
        width: 110px;
        height: 110px;
        margin: 0 auto 24px;
    }
    #popup-icon-wrap svg { display: none; width: 100%; height: 100%; }
    #popup-icon-wrap svg.active { display: block; }

    /* ── SVG draw animations ── */
    .popup-circle {
        stroke-dasharray: 340; stroke-dashoffset: 340;
        animation: drawStroke .65s .1s ease forwards;
    }
    .popup-check {
        stroke-dasharray: 80; stroke-dashoffset: 80;
        animation: drawStroke .4s .7s ease forwards;
    }
    .popup-cross-1 {
        stroke-dasharray: 57; stroke-dashoffset: 57;
        animation: drawStroke .35s .68s ease forwards;
    }
    .popup-cross-2 {
        stroke-dasharray: 57; stroke-dashoffset: 57;
        animation: drawStroke .35s .86s ease forwards;
    }
    .popup-triangle {
        stroke-dasharray: 300; stroke-dashoffset: 300;
        animation: drawStroke .65s .1s ease forwards;
    }
    .popup-excl-line {
        stroke-dasharray: 30; stroke-dashoffset: 30;
        animation: drawStroke .3s .75s ease forwards;
    }
    .popup-info-line {
        stroke-dasharray: 35; stroke-dashoffset: 35;
        animation: drawStroke .3s .75s ease forwards;
    }
    .popup-excl-dot, .popup-info-dot {
        opacity: 0;
        animation: fadeInEl .25s .98s ease forwards;
    }

    /* ── Text ── */
    #popup-title {
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 10px;
        letter-spacing: -.4px;
        color: #111827;
    }
    #popup-message {
        font-size: 14.5px;
        color: #6b7280;
        line-height: 1.7;
        margin-bottom: 30px;
        white-space: pre-line;
    }

    /* ── Button ── */
    #popup-btn {
        display: inline-block;
        padding: 13px 50px;
        border: none;
        border-radius: 50px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        color: #fff;
        letter-spacing: .3px;
        margin-bottom: 22px;
        transition: transform .15s, box-shadow .15s;
    }
    #popup-btn:hover  { transform: translateY(-2px); box-shadow: 0 10px 28px rgba(0,0,0,.2); }
    #popup-btn:active { transform: translateY(0); }

    /* ── Per-type colours ── */
    #popup-modal.type-success #popup-title { color: #15803d; }
    #popup-modal.type-success #popup-btn   { background: linear-gradient(135deg,#22c55e,#16a34a); }
    #popup-modal.type-success #popup-progress-bar { background: #22c55e; }

    #popup-modal.type-error #popup-title { color: #b91c1c; }
    #popup-modal.type-error #popup-btn   { background: linear-gradient(135deg,#ef4444,#dc2626); }
    #popup-modal.type-error #popup-progress-bar { background: #ef4444; }

    #popup-modal.type-warning #popup-title { color: #b45309; }
    #popup-modal.type-warning #popup-btn   { background: linear-gradient(135deg,#f59e0b,#d97706); }
    #popup-modal.type-warning #popup-progress-bar { background: #f59e0b; }

    #popup-modal.type-info #popup-title { color: #1d4ed8; }
    #popup-modal.type-info #popup-btn   { background: linear-gradient(135deg,#3b82f6,#2563eb); }
    #popup-modal.type-info #popup-progress-bar { background: #3b82f6; }

    /* ── Progress bar ── */
    #popup-progress-wrap {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 4px;
        background: #f3f4f6;
    }
    #popup-progress-bar {
        height: 100%;
        width: 100%;
        transform-origin: left;
    }

    /* ── Keyframes ── */
    @keyframes popupZoomIn  {
        from { opacity: 0; transform: translate(-50%,-50%) scale(.82); }
        to   { opacity: 1; transform: translate(-50%,-50%) scale(1);   }
    }
    @keyframes popupZoomOut {
        from { opacity: 1; transform: translate(-50%,-50%) scale(1);   }
        to   { opacity: 0; transform: translate(-50%,-50%) scale(.82); }
    }
    @keyframes drawStroke { to { stroke-dashoffset: 0; } }
    @keyframes fadeInEl   { to { opacity: 1; } }
</style>

<script>
window.Popup = {
    timer: null,
    modal: null,
    overlay: null,
    _escHandler: null,

    init() {
        this.modal   = document.getElementById('popup-modal');
        this.overlay = document.getElementById('popup-overlay');
    },

    show(type, title, message, duration = 0) {
        if (!this.modal) this.init();

        this.modal.classList.remove('type-success','type-error','type-warning','type-info','hide');
        this.modal.classList.add('type-' + type);

        document.getElementById('popup-title').textContent   = title;
        document.getElementById('popup-message').textContent = message;

        // Restart SVG animations by cloning
        document.querySelectorAll('#popup-icon-wrap svg').forEach(s => s.classList.remove('active'));
        const svgEl = document.getElementById('popup-svg-' + type);
        if (svgEl) {
            const clone = svgEl.cloneNode(true);
            clone.classList.add('active');
            svgEl.parentNode.replaceChild(clone, svgEl);
        }

        // Reset progress bar
        const bar = document.getElementById('popup-progress-bar');
        bar.style.transition = 'none';
        bar.style.transform  = 'scaleX(1)';

        this.overlay.style.display = 'block';
        this.modal.style.display   = 'block';

        if (duration > 0) {
            requestAnimationFrame(() => requestAnimationFrame(() => {
                bar.style.transition = `transform ${duration}ms linear`;
                bar.style.transform  = 'scaleX(0)';
            }));
            this.timer = setTimeout(() => this.dismiss(), duration);
        }

        this.overlay.onclick = () => this.dismiss();
        this._escHandler = (e) => { if (e.key === 'Escape') this.dismiss(); };
        document.addEventListener('keydown', this._escHandler);
    },

    dismiss() {
        if (!this.modal) return;
        clearTimeout(this.timer);
        if (this._escHandler) document.removeEventListener('keydown', this._escHandler);
        this.modal.classList.add('hide');
        setTimeout(() => {
            this.modal.style.display   = 'none';
            this.overlay.style.display = 'none';
            this.modal.classList.remove('hide');
        }, 300);
    },

    success(message, title = 'Succès !',    duration = 0) { this.show('success', title, message, duration); },
    error  (message, title = 'Erreur !',    duration = 0) { this.show('error',   title, message, duration); },
    warning(message, title = 'Attention !', duration = 0) { this.show('warning', title, message, duration); },
    info   (message, title = 'Information', duration = 0) { this.show('info',    title, message, duration); },
};

document.addEventListener('DOMContentLoaded', function () {
    Popup.init();

    @if (session('success'))
        Popup.success("{{ addslashes(session('success')) }}");
    @elseif (session('status'))
        Popup.info("{{ addslashes(session('status')) }}");
    @elseif ($errors->any())
        const errs = [
            @foreach ($errors->all() as $error)
                "{{ addslashes($error) }}",
            @endforeach
        ];
        Popup.error(errs.join('\n'));
    @endif
});
</script>
