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
                        <h1>Mail</h1>
                        <ul>
                            <li><a href="#introduction">Introduction</a></li>
                            <li><a href="#configuration">Configuration</a></li>
                            <li><a href="#writing-mailables">Writing Mailables</a></li>
                            <li>
                                <a href="#mail-templates">Mail Templates</a>
                                <ul>
                                    <li><a href="#vision-engine">Vision Engine Support</a></li>
                                    <li><a href="#passing-data">Passing Data to Views</a></li>
                                </ul>
                            </li>
                            <li><a href="#sending-mail">Sending Mail</a></li>
                        </ul>

                        <h2 id="introduction"><a href="#introduction">Introduction</a></h2>
                        <p>DreamFork provides a clean and simple email API powered by the popular Symfony Mailer component. Emails are handled via "mailable" classes, which allow you to keep your email logic organized and separated from your controllers.</p>

                        <h2 id="configuration"><a href="#configuration">Configuration</a></h2>
                        <p>The email configuration is stored in your <code>config/mail.php</code> file. In this file, you may configure multiple mailers and their respective transports (like SMTP).</p>
                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line"><span>MAIL_MAILER=smtp</span></div>
                                    <div class="line"><span>MAIL_HOST=sandbox.smtp.mailtrap.io</span></div>
                                    <div class="line"><span>MAIL_PORT=2525</span></div>
                                    <div class="line"><span>MAIL_USERNAME=null</span></div>
                                    <div class="line"><span>MAIL_PASSWORD=null</span></div>
                                    <div class="line"><span>MAIL_ENCRYPTION=tls</span></div>
                                    <div class="line"><span>MAIL_FROM_ADDRESS="hello@example.com"</span></div>
                                    <div class="line"><span>MAIL_FROM_NAME="${APP_NAME}"</span></div>
                                </code>
                            </pre>
                        </div>

                        <h2 id="writing-mailables"><a href="#writing-mailables">Writing Mailables</a></h2>
                        <p>All mailable classes should extend the <code>Framework\Mail\Mailable</code> class. Within the <code>build</code> method, you can define the subject and the view that should be rendered.</p>
                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line"><span>namespace App\Mail;</span></div>
                                    <div class="line"><span>&nbsp;</span></div>
                                    <div class="line"><span>use Framework\Mail\Mailable;</span></div>
                                    <div class="line"><span>&nbsp;</span></div>
                                    <div class="line"><span>class WelcomeMail extends Mailable</span></div>
                                    <div class="line"><span>{</span></div>
                                    <div class="line indent">
                                        <span>public function build()</span>
                                    </div>
                                    <div class="line indent">
                                        <span>{</span>
                                    </div>
                                    <div class="line indent">
                                        <span class="indent"></span>
                                        <span>return $this->subject('Welcome to DreamFork')</span>
                                    </div>
                                    <div class="line indent">
                                        <span class="indent"></span>
                                        <span class="indent"></span>
                                        <span>->view('emails.welcome');</span>
                                    </div>
                                    <div class="line indent">
                                        <span>}</span>
                                    </div>
                                    <div class="line"><span>}</span></div>
                                </code>
                            </pre>
                        </div>

                        <h2 id="mail-templates"><a href="#mail-templates">Mail Templates</a></h2>

                        <h3 id="vision-engine"><a href="#vision-engine">Vision Engine Support</a></h3>
                        <p>
                            DreamFork's mailer seamlessly integrates with the <a href="/docs/1.x/vision">Vision template engine</a>. This allows you to use the familiar curly brace syntax <code>&lbrace;&lbrace;&nbsp;&rbrace;&rbrace;</code> to display data, protecting your application against XSS attacks automatically.
                        </p>
                        <p>
                            You can also use Vision directives like <code>@resource</code> to inject CSS styles, which is particularly useful for email styling where inline styles are often preferred.
                        </p>

                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line"><span>&lt;!DOCTYPE html&gt;</span></div>
                                    <div class="line"><span>&lt;html&gt;</span></div>
                                    <div class="line indent"><span>&lt;head&gt;</span></div>
                                    <div class="line indent">
                                        <span class="indent"></span>
                                        <span>&lt;style&gt;</span>
                                    </div>
                                    <div class="line indent">
                                        <span class="indent"></span>
                                        <span class="indent"></span>
                                        <span>/* Load external CSS for the email */</span>
                                    </div>
                                    <div class="line indent">
                                        <span class="indent"></span>
                                        <span class="indent"></span>
                                        <span>&commat;resource(css/email.css);</span>
                                    </div>
                                    <div class="line indent">
                                        <span class="indent"></span>
                                        <span>&lt;/style&gt;</span>
                                    </div>
                                    <div class="line indent"><span>&lt;/head&gt;</span></div>
                                    <div class="line indent"><span>&lt;body&gt;</span></div>
                                    <div class="line indent">
                                        <span class="indent"></span>
                                        <span>&lt;h1&gt;Hello, &lbrace;&lbrace; $name &rbrace;&rbrace;!&lt;/h1&gt;</span>
                                    </div>
                                    <div class="line indent">
                                        <span class="indent"></span>
                                        <span>&lt;p&gt;Welcome to the application.&lt;/p&gt;</span>
                                    </div>
                                    <div class="line indent"><span>&lt;/body&gt;</span></div>
                                    <div class="line"><span>&lt;/html&gt;</span></div>
                                </code>
                            </pre>
                        </div>

                        <h3 id="passing-data"><a href="#passing-data">Passing Data to Views</a></h3>
                        <p>
                            Typically, you will want to pass data to your view directly when creating the Mailable. You can accept this data in the mailable's constructor and pass it to the <code>view</code> method.
                        </p>

                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line"><span>public function __construct(public string $userName) {}</span></div>
                                    <div class="line"><span>&nbsp;</span></div>
                                    <div class="line"><span>public function build()</span></div>
                                    <div class="line"><span>{</span></div>
                                    <div class="line indent">
                                        <span>return $this->view('emails.welcome', [</span>
                                    </div>
                                    <div class="line indent">
                                        <span class="indent"></span>
                                        <span>'name' => $this->userName</span>
                                    </div>
                                    <div class="line indent">
                                        <span>]);</span>
                                    </div>
                                    <div class="line"><span>}</span></div>
                                </code>
                            </pre>
                        </div>

                        <h2 id="sending-mail"><a href="#sending-mail">Sending Mail</a></h2>
                        <p>To send an email, use the <code>to</code> method on the <code>Mail</code> facade. The <code>to</code> method accepts an email address, and the <code>send</code> method accepts an instance of your mailable class:</p>

                        <div class="code-snippet">
                            <pre>
                                <code>
                                    <div class="line"><span>use Framework\Support\Facades\Mail;</span></div>
                                    <div class="line"><span>use App\Mail\WelcomeMail;</span></div>
                                    <div class="line"><span>&nbsp;</span></div>
                                    <div class="line"><span>Mail::to('user@example.com')->send(new WelcomeMail('John Doe'));</span></div>
                                </code>
                            </pre>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>