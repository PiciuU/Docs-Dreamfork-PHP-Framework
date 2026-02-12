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
                                        <a href="#patch-1.0.4">Patch 1.0.4</a>
                                    </li>
                                    <li>
                                        <a href="#patch-1.0.3">Patch 1.0.3</a>
                                    </li>
                                    <li>
                                        <a href="#patch-1.0.2">Patch 1.0.2</a>
                                    </li>
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
                                The current version of Dreamfork framework is <code>1.0.4</code>, and it was officially released on <code>February 12, 2026</code>.
                            </p>
                        </blockquote>

                        <h2 id="version-1.0.x">
                            <a href="#version-1.0.x">Version 1.0.x</a>
                        </h2>

                        <h3 id="patch-1.0.4">
                            <a href="#patch-1.0.4">Patch 1.0.4</a>
                        </h3>
                        <p>
                            This patch was released on February 12, 2026.
                        </p>
                        <p>
                            This update introduces a robust Mailing system powered by the Symfony Mailer component. We have added the <code>Mail</code> facade, a <code>Mailable</code> class structure for building emails, and support for SMTP transports. This enhancement allows developers to send expressive, template-based emails directly from the application using the Vision engine.
                        </p>
                        <p>
                            These modifications exclusively impact core framework files and include new configuration files. To update framework files in your projects to Version 1.0.4, you can review the changes in the following <a href="https://github.com/PiciuU/DreamFork-PHP-Framework/commit/dd86adfb13114a6ceb75d473cb209c18e85847d2">commit</a>.
                        </p>

                        <h3 id="patch-1.0.3">
                            <a href="#patch-1.0.3">Patch 1.0.3</a>
                        </h3>
                        <p>
                            This patch was released on February 11, 2026.
                        </p>
                        <p>
                            In this update, we have implemented a unified Caching system. This feature includes the new <code>Cache</code> facade and a file-based driver, allowing for efficient data storage and retrieval to improve application performance. The update provides methods for storing, retrieving, and managing cached items with support for expiration times.
                        </p>
                        <p>
                            All changes in this update are backward-compatible. To update framework files in your projects to Version 1.0.3, you need to download the modified files from the following <a href="https://github.com/PiciuU/DreamFork-PHP-Framework/commit/44f6ff705701185b5090aa2de991ae3bad0c1a99">commit</a>.
                        </p>

                        <h3 id="patch-1.0.2">
                            <a href="#patch-1.0.2">Patch 1.0.2</a>
                        </h3>
                        <p>
                            This patch was released on July 27, 2024.
                        </p>
                        <p>
                            In this update, we have implemented comprehensive handling for Cross-Origin Resource Sharing (CORS) similar to Laravel's approach. This enhancement aims to improve security and compatibility for cross-origin interactions within our framework. All changes in this update are backward-compatible with Version 1.0.0, meaning there's no need for any specific adjustments in your project to implement this update. These modifications exclusively impact core framework files. To update framework files in your projects to Version 1.0.2, you need to download the modified files from the following <a href="https://github.com/PiciuU/DreamFork-PHP-Framework/pull/22/commits">pull request</a>.
                        </p>
                        <p>
                            For a detailed list of changes, please refer to <a href="https://github.com/PiciuU/DreamFork-PHP-Framework/pull/22">PR description</a>.
                        </p>

                        <h3 id="patch-1.0.1">
                            <a href="#patch-1.0.1">Patch 1.0.1</a>
                        </h3>
                        <p>
                            This patch was released on January 11, 2024.
                        </p>
                        <p>
                            In this small update we've addressed minor bugs, improved the framework's functionality, and enhanced compatibility with Linux-based systems. All changes in this update are backward-compatible with Version 1.0.0, meaning there's no need for any specific adjustments in your project to implement this update. These modifications exclusively impact core framework files. To update framework files in your projects to Version 1.0.1, you need to download the modified files from the following <a href="https://github.com/PiciuU/DreamFork-PHP-Framework/pull/21/commits">pull request</a>.
                        </p>
                        <p>
                            For a detailed list of changes, please refer to <a href="https://github.com/PiciuU/DreamFork-PHP-Framework/pull/21">PR description</a>.
                        </p>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>