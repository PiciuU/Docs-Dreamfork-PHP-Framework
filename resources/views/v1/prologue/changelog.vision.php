<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @component(html-elements/head);
    </head>
    <body>
        <div id="app">
            <main>
                @component(v1/components/menu);
                <section>
                    <div class="container">
                        <h1>Changelog</h1>
                        <ul>
                            <li>
                                <a href="#introduction">Introduction</a>
                            </li>
                            <li>
                                <a href="#version-1.0.x">Version 1.0.x</a>
                                <ul>
                                    <li>
                                        <a href="#patch-1.0.1">Patch 1.0.1</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h2 id="introduction">
                            <a href="#introduction">Introduction</a>
                        </h2>
                        <p>
                            This section provides a comprehensive overview of all documented changes introduced in each update of Dreamfork. Here, you'll find detailed descriptions of modifications, enhancements, and fixes, along with guidance on how to implement these changes in your project.
                        </p>
                        <p>
                            Whether you're seeking information about the latest features, bug fixes, or improvements, the Changelog serves as your go-to resource for understanding the evolution of the framework. Each entry includes clear instructions on how to apply the changes to your project, ensuring a smooth transition and compatibility with the latest version of Dreamfork. Stay informed and up-to-date by exploring the Changelog for a complete understanding of the framework's development journey.
                        </p>
                        <p>
                            For those who prefer a hands-on approach, you can independently explore the <a href="https://github.com/PiciuU/DreamFork-PHP-Framework">framework repository</a>. This repository offers a straightforward way to review the commit history and stay updated on the framework's development. If you want to take a closer look at what's happening with Dreamfork, that repository is the place to be.
                        </p>
                        <blockquote>
                            <div class="icon"></div>
                            <p>
                            The current version of Dreamfork framework is <code>1.0.0</code>, and it was officially released on <code>January 1, 2024</code>.
                            </p>
                        </blockquote>
                        <h2 id="version-1.0.x">
                            <a href="#version-1.0.x">Version 1.0.x</a>
                        </h2>
                        <h3 id="patch-1.0.1">
                            <a href="#patch-1.0.1">Patch 1.0.1</a>
                        </h3>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>