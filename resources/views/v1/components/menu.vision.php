<header>
    <a href="{{ app('url')->to('/') }}" class="logo">
        <img src="{{app('url')->to('/') }}/assets/logo.svg" alt="Dreamfork Logo - Symbolizing Innovation and Creativity"/>
        <span>Dreamfork</span>
    </a>
    <button class="toggle-menu">
        <span class="material-symbols-outlined">
            menu
        </span>
    </button>
</header>

<aside class="hide-menu">
    <div class="container">
        <a href="{{ app('url')->to('/') }}" class="logo">
            <img src="{{app('url')->to('/') }}/assets/logo.svg" alt="Dreamfork Logo - Symbolizing Innovation and Creativity"/>
            <span>Dreamfork</span>
        </a>
        <nav>
            <ul>
                <li>
                    <h2>Prologue</h2>
                    <ul>
                        <li data-subpage-name="releases">
                            <a href="/docs/1.x/releases">Release Notes</a>
                        </li>
                        <li data-subpage-name="changelog">
                            <a href="/docs/1.x/changelog">Changelog</a>
                        </li>
                        <li data-subpage-name="roadmap">
                            <a href="/docs/1.x/roadmap">Roadmap</a>
                        </li>
                        <li data-subpage-name="examples">
                            <a href="/docs/1.x/examples">Examples Of Usage</a>
                        </li>
                        <li data-subpage-name="contributions">
                            <a href="/docs/1.x/contributions">Contribution Guide</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h2>Getting Started</h2>
                    <ul>
                        <li data-subpage-name="installation">
                            <a href="/docs/1.x/installation">Installation</a>
                        </li>
                        <li data-subpage-name="configuration">
                            <a href="/docs/1.x/configuration">Configuration</a>
                        </li>
                        <li data-subpage-name="structure">
                            <a href="/docs/1.x/structure">Directory Structure</a>
                        </li>
                        <li data-subpage-name="frontend">
                            <a href="/docs/1.x/frontend">Frontend</a>
                        </li>
                        <li data-subpage-name="deployment">
                            <a href="/docs/1.x/deployment">Deployment</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h2>Architecture Concepts</h2>
                    <ul>
                        <li data-subpage-name="lifecycle">
                            <a href="/docs/1.x/lifecycle">Request Lifecycle</a>
                        </li>
                        <li data-subpage-name="container">
                            <a href="/docs/1.x/container">Service Container</a>
                        </li>
                        <li data-subpage-name="facades">
                            <a href="/docs/1.x/facades">Facades</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h2>The Basics</h2>
                    <ul>
                        <li data-subpage-name="routing">
                            <a href="/docs/1.x/routing">Routing</a>
                        </li>
                        <li data-subpage-name="controllers">
                            <a href="/docs/1.x/controllers">Controllers</a>
                        </li>
                        <li data-subpage-name="requests">
                            <a href="/docs/1.x/requests">Requests</a>
                        </li>
                        <li data-subpage-name="responses">
                            <a href="/docs/1.x/responses">Responses</a>
                        </li>
                        <li data-subpage-name="caching">
                            <a href="/docs/1.x/caching">Caching</a>
                        </li>
                        <li data-subpage-name="mail">
                            <a href="/docs/1.x/mail">Mail</a>
                        </li>
                        <li data-subpage-name="collections">
                            <a href="/docs/1.x/collections">Collections</a>
                        </li>
                        <li data-subpage-name="helpers">
                            <a href="/docs/1.x/helpers">Helpers</a>
                        </li>
                        <li data-subpage-name="views">
                            <a href="/docs/1.x/views">Views</a>
                        </li>
                        <li data-subpage-name="vision">
                            <a href="/docs/1.x/vision">Vision</a>
                        </li>
                        <li data-subpage-name="url">
                            <a href="/docs/1.x/url">URL</a>
                        </li>
                        <li data-subpage-name="validation">
                            <a href="/docs/1.x/validation">Validation</a>
                        </li>
                        <li data-subpage-name="filesystem">
                            <a href="/docs/1.x/filesystem">File Storage</a>
                        </li>
                        <li data-subpage-name="errors">
                            <a href="/docs/1.x/errors">Error Handling</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h2>Security</h2>
                    <ul>
                        <li data-subpage-name="authentication">
                            <a href="/docs/1.x/authentication">Authentication</a>
                        </li>
                        <li data-subpage-name="tokenization">
                            <a href="/docs/1.x/tokenization">Tokenization</a>
                        </li>
                        <li data-subpage-name="hashing">
                            <a href="/docs/1.x/hashing">Hashing</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h2>Database</h2>
                    <ul>
                        <li data-subpage-name="queries">
                            <a href="/docs/1.x/queries">Query Builder</a>
                        </li>
                        <li data-subpage-name="orm">
                            <a href="/docs/1.x/orm">ORM Models</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<div class="scroll-btn">
    <span class="material-symbols-outlined">
        expand_less
    </span>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentSubpageName;

        if (window.location.pathname.endsWith("/docs/1.x")) {
            currentSubpageName = 'installation';
        } else {
            currentSubpageName = window.location.pathname.split('/').pop();
        }

        const subpages = document.querySelectorAll('li[data-subpage-name]');
        subpages.forEach(function(subpage) {
            if (subpage.getAttribute('data-subpage-name') === currentSubpageName) {
                subpage.classList.add('active');
                expandChapter(subpage.parentElement.closest('li'));
            }
        });

        const chapterTitles = document.querySelectorAll('h2');
        chapterTitles.forEach(function (chapterTitle) {
            chapterTitle.addEventListener('click', function () {
                expandChapter(chapterTitle.parentElement);
            });
        });

        function expandChapter(chapter) {
            const needToAssign = !chapter.classList.contains('sub-on');
            const allChapters = chapter.parentElement.querySelectorAll(':scope > li');

            allChapters.forEach(function (chapter) {
                chapter.classList.remove('sub-on');
            });

            if (needToAssign) {
                chapter.classList.add('sub-on');
            }
        }

        const menu = document.querySelector('aside');
        const toggleMenuBtn = document.querySelector('.toggle-menu');

        toggleMenuBtn.addEventListener('click', function() {
            toggleMenuBtn.firstElementChild.innerText = toggleMenuBtn.firstElementChild.innerText == 'menu' ? 'close' : 'menu';
            menu.classList.toggle('hide-menu');
        });

        const scrollBtn = document.querySelector('.scroll-btn');

        window.addEventListener("scroll", function () {
            window.scrollY > window.innerHeight / 3
                ? scrollBtn.classList.add("show")
                : scrollBtn.classList.remove("show");
        });

        scrollBtn.addEventListener("click", function () {
            if (window.scrollY != 0) {
                setTimeout(function () {
                    window.scrollTo(0, 0);
                }, 10);
            }
        });
    });
</script>