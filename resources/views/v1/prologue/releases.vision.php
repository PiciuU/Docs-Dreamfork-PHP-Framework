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
                        <h1>Release Notes</h1>
                        <ul>
                            <li>
                                <a href="#introduction">Introduction</a>
                            </li>
                            <li>
                                <a href="#versioning-approach">Versioning Approach</a>
                            </li>
                            <li>
                                <a href="#update-process">Update Process</a>
                            </li>
                        </ul>
                        <h2 id="introduction">
                            <a href="#introduction">Introduction</a>
                        </h2>
                        <p>
                            Welcome to the world of Dreamfork - In this section, we'll explore the versioning strategy adopted by Dreamfork and understand the process of updating your projects as new versions of the framework are released. Familiarizing yourself with the versioning conventions and upgrade procedures is crucial to staying current with the latest features, improvements, and fixes in Dreamfork. Whether you're initiating a new project or maintaining an existing one, this guide will provide insights into seamlessly navigating through framework updates. Let's dive into the details of version management and project upgrades within the Dreamfork ecosystem.
                        </p>
                        <h2 id="versioning-approach">
                            <a href="#versioning-approach">Versioning Approach</a>
                        </h2>
                        <p>
                            The framework follows Semantic Versioning (SemVer) to clearly identify changes in each version. According to SemVer, the version number has the format <code>MAJOR.MINOR.PATCH</code>:
                        </p>
                        <div class="content-list">
                            <ul>
                                <li>
                                    <code>MAJOR:</code> Incremented when making incompatible API changes or significant architectural shifts that require manual migration.
                                </li>
                                <li>
                                    <code>MINOR:</code> Introduces substantial new features or large functional updates in a backward-compatible manner.
                                </li>
                                <li>
                                    <code>PATCH:</code> Focuses on bug fixes, security updates, and minor backward-compatible enhancements or small feature additions (such as new helper methods or driver improvements).
                                </li>
                            </ul>
                        </div>
                        <p>
                            This approach allows the framework to evolve quickly and deliver useful features without waiting for larger release cycles, while still guaranteeing that your application will not break during a patch update.
                        </p>
                        <h2 id="update-process">
                            <a href="#update-process">Update Process</a>
                        </h2>
                        <p>
                            At present, Dreamfork doesn't have a dedicated update mechanism akin to Composer packages. However, fear not - the process of updating the framework to the latest version is generally straightforward and reversible. Even in major versions, there's a high likelihood that over 90% of your application will remain compatible, and necessary adjustments will be minimal.
                        </p>
                        <p>
                            To update your project to the current version of the framework, follow these steps:
                        </p>
                        <h4 id="visit-changelog">
                            <a href="#visit-changelog">Visit Changelog</a>
                        </h4>
                        <p>
                            Head to the <a href="/docs/1.x/changelog">Changelog</a> section, where each update is briefly described, including the implementation steps for your project.
                        </p>
                        <h4 id="review-changes">
                            <a href="#review-changes">Review Changes</a>
                        </h4>
                        <p>
                            Familiarize yourself with the changes introduced in the latest version, paying attention to any backward compatibility considerations.
                        </p>
                        <h4 id="backup-your-project">
                            <a href="#backup-your-project">Backup Your Project</a>
                        </h4>
                        <p>
                            Before proceeding with the update, create a backup of your project to safeguard against any unforeseen issues. This way if any critical issues arise, you can roll back to the previous version.
                        </p>
                        <h4 id="testing">
                            <a href="#testing">Testing</a>
                        </h4>
                        <p>
                            Test your project thoroughly after the update to ensure that all functionalities work as expected.
                        </p>
                        <blockquote>
                            <div class="icon"></div>
                            <p>
                                While Dreamfork strives to make updates seamless, always exercise caution and carefully review the Changelog for specific guidance on implementing updates in your project.
                            </p>
                        </blockquote>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
