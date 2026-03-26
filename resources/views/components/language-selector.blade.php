{{-- Language Selector Dropdown - style navigation Vitour --}}
@php
    $locales = [
        'fr' => ['label' => 'Français',  'flag' => '🇫🇷', 'short' => 'FR'],
        'en' => ['label' => 'English',   'flag' => '🇬🇧', 'short' => 'EN'],
        'es' => ['label' => 'Español',   'flag' => '🇪🇸', 'short' => 'ES'],
        'de' => ['label' => 'Deutsch',   'flag' => '🇩🇪', 'short' => 'DE'],
        'zh' => ['label' => '中文',       'flag' => '🇨🇳', 'short' => '中文'],
    ];
    $current = app()->getLocale();
    $currentLocale = $locales[$current] ?? $locales['fr'];
@endphp

<div class="lang-dropdown-wrap">
    <button class="lang-toggle" type="button">
        <span class="lang-flag">{{ $currentLocale['flag'] }}</span>
        <span class="lang-short">{{ $currentLocale['short'] }}</span>
        <i class="lang-caret">▾</i>
    </button>
    <ul class="lang-menu">
        @foreach($locales as $code => $info)
            <li class="{{ $current === $code ? 'active' : '' }}">
                <a href="{{ route('set-locale', ['locale' => $code]) }}">
                    <span class="lang-flag">{{ $info['flag'] }}</span>
                    <span>{{ $info['label'] }}</span>
                    @if($current === $code)<span class="lang-check">✓</span>@endif
                </a>
            </li>
        @endforeach
    </ul>
</div>

<style>
.lang-dropdown-wrap {
    position: relative;
    display: inline-block;
    z-index: 9999;
    margin-left: 10px;
}
.lang-toggle {
    display: flex;
    align-items: center;
    gap: 5px;
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.3);
    color: inherit;
    padding: 5px 11px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 12px;
    font-weight: 600;
    transition: all 0.25s;
    white-space: nowrap;
}
.lang-toggle:hover,
.lang-dropdown-wrap:hover .lang-toggle {
    background: #FF6B35;
    border-color: #FF6B35;
    color: #fff;
}
.lang-flag { font-size: 14px; line-height: 1; }
.lang-caret { font-style: normal; font-size: 10px; transition: transform 0.25s; }
.lang-dropdown-wrap:hover .lang-caret { transform: rotate(180deg); }
.lang-menu {
    display: none;
    position: absolute;
    top: calc(100% + 6px);
    right: 0;
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    box-shadow: 0 8px 24px rgba(0,0,0,.12);
    min-width: 155px;
    list-style: none;
    margin: 0;
    padding: 6px 0;
    z-index: 99999;
}
.lang-dropdown-wrap:hover .lang-menu {
    display: block;
    animation: langFadeIn 0.15s ease;
}
@keyframes langFadeIn {
    from { opacity: 0; transform: translateY(-4px); }
    to   { opacity: 1; transform: translateY(0); }
}
.lang-menu li a {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 14px;
    color: #374151;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    transition: background 0.15s;
}
.lang-menu li a:hover { background: #fff7f4; color: #FF6B35; }
.lang-menu li.active a { color: #FF6B35; background: #fff7f4; font-weight: 700; }
.lang-check { margin-left: auto; color: #FF6B35; font-size: 12px; }
</style>
