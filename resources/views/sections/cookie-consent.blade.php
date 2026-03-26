{{-- Cookie Consent Banner --}}
<div id="cookieConsent" class="fixed bottom-0 inset-x-0 z-[9999] translate-y-full transition-transform duration-500 ease-out">
    <div class="max-w-[720px] mx-auto px-4 pb-4">
        <div class="bg-white rounded-2xl shadow-[0_8px_40px_rgba(42,34,32,0.12)] border border-cream-dark p-6 sm:p-8">
            <div class="flex flex-col sm:flex-row sm:items-start gap-4">
                <div class="flex-1 min-w-0">
                    <p class="text-skin-text text-[0.92rem] leading-relaxed">
                        Ez a weboldal cookie-kat használ a jobb felhasználói élmény és a látogatottsági statisztikák érdekében.
                    </p>
                </div>
                <div class="flex gap-3 shrink-0 sm:mt-0.5">
                    <button id="cookieReject" class="px-5 py-2.5 rounded-full text-[0.82rem] font-medium tracking-wide border border-rose/30 text-rose-dark bg-transparent cursor-pointer transition-all duration-200 hover:bg-rose-light/40">
                        Elutasítom
                    </button>
                    <button id="cookieAccept" class="px-5 py-2.5 rounded-full text-[0.82rem] font-medium tracking-wide border-none text-white bg-rose cursor-pointer transition-all duration-200 hover:bg-rose-dark shadow-[0_2px_12px_rgba(200,135,122,0.3)]">
                        Elfogadom
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    var COOKIE_NAME = 'cookie_consent';
    var COOKIE_DAYS = 365;

    function getCookie(name) {
        var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        return match ? match[2] : null;
    }

    function setCookie(name, value, days) {
        var d = new Date();
        d.setTime(d.getTime() + days * 86400000);
        document.cookie = name + '=' + value + ';expires=' + d.toUTCString() + ';path=/;SameSite=Lax';
    }

    function updateConsent(granted) {
        gtag('consent', 'update', {
            'ad_storage': granted ? 'granted' : 'denied',
            'ad_user_data': granted ? 'granted' : 'denied',
            'ad_personalization': granted ? 'granted' : 'denied',
            'analytics_storage': granted ? 'granted' : 'denied',
            'functionality_storage': granted ? 'granted' : 'denied',
            'personalization_storage': granted ? 'granted' : 'denied'
        });
    }

    function hideBanner() {
        var el = document.getElementById('cookieConsent');
        if (el) el.classList.add('translate-y-full');
    }

    function showBanner() {
        var el = document.getElementById('cookieConsent');
        if (el) {
            el.classList.remove('translate-y-full');
        }
    }

    // Check saved consent
    var saved = getCookie(COOKIE_NAME);
    if (saved === 'accepted') {
        updateConsent(true);
    } else if (saved === 'rejected') {
        updateConsent(false);
    } else {
        // Show banner after short delay
        setTimeout(showBanner, 800);
    }

    // Button handlers
    document.addEventListener('DOMContentLoaded', function() {
        var acceptBtn = document.getElementById('cookieAccept');
        var rejectBtn = document.getElementById('cookieReject');

        if (acceptBtn) {
            acceptBtn.addEventListener('click', function() {
                setCookie(COOKIE_NAME, 'accepted', COOKIE_DAYS);
                updateConsent(true);
                hideBanner();
            });
        }
        if (rejectBtn) {
            rejectBtn.addEventListener('click', function() {
                setCookie(COOKIE_NAME, 'rejected', COOKIE_DAYS);
                updateConsent(false);
                hideBanner();
            });
        }
    });
})();
</script>
