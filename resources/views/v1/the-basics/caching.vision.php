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
                        <h1>Caching</h1>
                        <ul>
                            <li>
                                <a href="#introduction">Introduction</a>
                            </li>
                            <li>
                                <a href="#configuration">Configuration</a>
                            </li>
                            <li>
                                <a href="#cache-usage">Cache Usage</a>
                                <ul>
                                    <li>
                                        <a href="#retrieving-items">Retrieving Items</a>
                                    </li>
                                    <li>
                                        <a href="#storing-items">Storing Items</a>
                                    </li>
                                    <li>
                                        <a href="#removing-items">Removing Items</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <h2 id="introduction">
                            <a href="#introduction">Introduction</a>
                        </h2>
                        <p>
                            Some data retrieval or processing tasks performed by your application may be CPU intensive or take several seconds to complete. When this is the case, it is common to cache the retrieved data for a time so it can be retrieved quickly on subsequent requests.
                        </p>
                        <p>
                            DreamFork provides an expressive, unified API for various caching backends. Currently, the framework supports the <code>file</code> driver, which stores serialized objects in the filesystem.
                        </p>

                        <h2 id="configuration">
                            <a href="#configuration">Configuration</a>
                        </h2>
                        <p>
                            The cache configuration file is located at <code>config/cache.php</code>. In this file, you may specify which cache driver you would like to be used by default throughout your application.
                        </p>
                        <p>
                            DreamFork also supports configuration via the <code>.env</code> file. Ensure you have the driver defined:
                        </p>

                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line">
                                        <span>CACHE_DRIVER=file</span>
                                    </div>
                                </code>
                            </pre>
                        </div>

                        <h2 id="cache-usage">
                            <a href="#cache-usage">Cache Usage</a>
                        </h2>
                        <p>
                            You may obtain a cache instance via the <code>Cache</code> facade. The facade provides convenient, static access to the underlying implementation of the DreamFork cache contracts.
                        </p>

                        <h3 id="retrieving-items">
                            <a href="#retrieving-items">Retrieving Items</a>
                        </h3>
                        <p>
                            The <code>get</code> method is used to retrieve items from the cache. If the item does not exist in the cache, <code>null</code> will be returned. You may also pass a second argument to the method specifying the default value you wish to be returned if the item doesn't exist:
                        </p>

                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line">
                                        <span>use Framework\Support\Facades\Cache;</span>
                                    </div>
                                    <div class="line">
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="line">
                                        <span>$value = Cache::get('key');</span>
                                    </div>
                                    <div class="line">
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="line">
                                        <span>$value = Cache::get('key', 'default_value');</span>
                                    </div>
                                </code>
                            </pre>
                        </div>

                        <p>
                            You may determine if an item exists in the cache using the <code>has</code> method. This method will return <code>true</code> if the value exists and is not null:
                        </p>

                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line">
                                        <span>if (Cache::has('key')) {</span>
                                    </div>
                                    <div class="line indent">
                                        <span>// ...</span>
                                    </div>
                                    <div class="line">
                                        <span>}</span>
                                    </div>
                                </code>
                            </pre>
                        </div>

                        <h3 id="storing-items">
                            <a href="#storing-items">Storing Items</a>
                        </h3>
                        <p>
                            You may use the <code>put</code> method to store items in the cache. You will also need to specify the number of seconds for which the value should be cached:
                        </p>

                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line">
                                        <span>// Store value for 10 minutes (600 seconds)</span>
                                    </div>
                                    <div class="line">
                                        <span>Cache::put('key', 'value', 600);</span>
                                    </div>
                                </code>
                            </pre>
                        </div>

                        <p>
                            Sometimes you may wish to retrieve an item from the cache, but also store a default value if the requested item doesn't exist. You may do this using the <code>remember</code> method:
                        </p>

                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line">
                                        <span>$users = Cache::remember('users', 3600, function () {</span>
                                    </div>
                                    <div class="line indent">
                                        <span>return DB::table('users')->get();</span>
                                    </div>
                                    <div class="line">
                                        <span>});</span>
                                    </div>
                                </code>
                            </pre>
                        </div>
                        <p>
                            In this example, if the <code>users</code> key does not exist in the cache, the closure will be executed, and its result will be stored in the cache for 3600 seconds.
                        </p>

                        <h3 id="removing-items">
                            <a href="#removing-items">Removing Items</a>
                        </h3>
                        <p>
                            You may remove items from the cache using the <code>forget</code> method:
                        </p>

                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line">
                                        <span>Cache::forget('key');</span>
                                    </div>
                                </code>
                            </pre>
                        </div>

                    </div>
                </section>
            </main>
        </div>
    </body>
</html>