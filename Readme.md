![blog-img-husky](https://i.ibb.co/9Ws5mbt/Screen-Shot-2022-05-05-at-16-55-27.png)


<h1>How use wordpress local with xampp</h1>

<article id="post-5251" class="post-5251 post type-post status-publish format-standard has-post-thumbnail hentry category-wordpress-tutorials">
						
    <p>Want to install XAMPP and WordPress – aka. install WordPress locally? This is a great idea if you want a development site that can be used for testing or other purposes. XAMPP lets you run a website from your very own computer. And once you get it set up, you can spin up a new WordPress install with just a few clicks.</p>
    
    
    
    <p>But to actually install XAMPP and WordPress can be a little tricky, so you might need a helping hand.</p>
    
    
    
    <p>In this step-by-step tutorial, I’ll show you exactly how to install XAMPP and set up a local WordPress development site. I’ll also share some common XAMPP errors and troubleshooting tips so that you can fix any problems you encounter (<em>though most people won’t experience any issues following this guide!</em>).</p>
    
    
    
    <p>At the end of this, you’ll have your very own local WordPress testing environment running on Windows.</p>
    
    
    <div class="su-accordion su-u-trim">
    <div class="su-spoiler su-spoiler-style-fancy su-spoiler-icon-plus" data-scroll-offset="0" data-anchor-in-url="no"><div class="su-spoiler-title" tabindex="0" role="button"><span class="su-spoiler-icon"></span>⚡ <strong>Pro tip:</strong> </div><div class="su-spoiler-content su-u-clearfix su-u-trim">
    
    
    
    <p>If what you’re really looking for is how to roll out WordPress for a live site, then you might want to consider going straight to a host like <a href="https://themeisle.com/blog/go/bluehost/" target="_blank" rel="noopener nofollow">Bluehost</a> and let them handle the technical setup. Bluehost is a web hosting firm. The way this works with them is that you select a hosting plan that fits your needs (most of the time it’s going to be the cheap plan at <a href="https://themeisle.com/blog/go/bluehost/" target="_blank" rel="noopener nofollow">$2.95 / month</a>), and then select the option to have WordPress installed on your setup automatically.</p>
    
    
    </div></div>
    <div class="su-spoiler su-spoiler-style-fancy su-spoiler-icon-plus su-spoiler-closed" data-scroll-offset="0" data-anchor-in-url="no"><div class="su-spoiler-title" tabindex="0" role="button"><span class="su-spoiler-icon"></span>💡 <strong>Note:</strong> </div><div class="su-spoiler-content su-u-clearfix su-u-trim">
    
    
    
    <p>If you need a more general guide on installing WordPress in other environments – not just locally, but on live servers as well, then please hop over to <a href="https://themeisle.com/blog/how-to-install-wordpress/">how to install WordPress</a>: a complete beginner’s guide.</p>
    
    
    </div></div>
    </div>
    
    
    
    <h2 id="download-install-xampp">Step 1: Download and install XAMPP on your computer</h2>
    
    
    
    <p>The first step on your way to install WordPress locally is to download and install the XAMPP software. You can download the Windows installer file <a href="https://www.apachefriends.org/index.html" target="_blank" rel="noopener">from Apache Friends</a>. It’s a big file, about 110 MB, so it might take a minute or so depending on your connection:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter size-large"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:1024/h:555/q:98/https://s15165.pcdn.co/wp-content/uploads/2022/01/how-to-install-xampp-1.png" width="1024" height="555" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:570/h:308/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2022/01/how-to-install-xampp-1.png" alt="xampp website - your tool to install WordPress locally" class="wp-image-47898" data-opt-lazy-loaded="true" style="max-width: 570px;" data-opt-otimized-width="570" data-opt-optimized-height="308"><noscript><img decoding=async  width="1024" height="555" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:1024/h:555/q:98/https://s15165.pcdn.co/wp-content/uploads/2022/01/how-to-install-xampp-1.png" alt="xampp website - your tool to install WordPress locally" class="wp-image-47898"/></noscript></figure></div>
    
    
    
    <p>Once the download finishes, run the file you downloaded to launch the XAMPP installer. If you’re running antivirus software, you might get a warning like this:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:625/h:250/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-2.png" width="625" height="250" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:313/h:125/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-2.png" alt="xampp install" class="wp-image-5255" data-opt-lazy-loaded="true" style="max-width: 313px;" data-opt-otimized-width="313" data-opt-optimized-height="125"><noscript><img decoding=async  width="625" height="250" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:625/h:250/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-2.png" alt="xampp install" class="wp-image-5255"/></noscript></figure></div>
    
    
    
    <p>Just click <strong>Yes</strong> to continue. Depending on your Windows configuration, you might also get a prompt about User Account Control (UAC). Just continue through that prompt as well. Once you get through all of the prompts, you should see the standard installer screen:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:628/h:527/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-3.png" width="628" height="527" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:314/h:263/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-3.png" alt="launch setup" class="wp-image-5256" data-opt-lazy-loaded="true" style="max-width: 314px;" data-opt-otimized-width="314" data-opt-optimized-height="263"><noscript><img decoding=async  width="628" height="527" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:628/h:527/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-3.png" alt="launch setup" class="wp-image-5256"/></noscript></figure></div>
    
    
    
    <p>Just click <strong>Next</strong> to continue.</p>
    
    
    
    <p>On the next screen, you can choose which components to install. To install XAMPP and WordPress, <strong>you do not need all of the components. In addition to the required components, all you need are:</strong></p>
    
    
    
    <ul><li><strong>MySQL</strong></li><li><strong>PHPMyAdmin</strong></li></ul>
    
    
    
    <p>However, some of the other components can be useful. For example, if you want to send/debug transactional emails, you might want to install the email-related components. It’s totally up to you, though.</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:624/h:528/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-4.png" width="624" height="528" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:312/h:264/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-4.png" alt="required components" class="wp-image-5257" data-opt-lazy-loaded="true" style="max-width: 312px;" data-opt-otimized-width="312" data-opt-optimized-height="264"><noscript><img decoding=async  width="624" height="528" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:624/h:528/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-4.png" alt="required components" class="wp-image-5257"/></noscript></figure></div>
    
    
    
    <p>Again, this is all that’s needed to install WordPress locally. Uncheck everything else and click <strong>Next.</strong></p>
    
    
    
    <p>You can now select which folder to install XAMPP in. I always leave it as the default:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:628/h:527/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-5.png" width="628" height="527" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:314/h:263/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-5.png" alt="target folder to install WordPress locally" class="wp-image-5258" data-opt-lazy-loaded="true" style="max-width: 314px;" data-opt-otimized-width="314" data-opt-optimized-height="263"><noscript><img decoding=async  width="628" height="527" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:628/h:527/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-5.png" alt="target folder to install WordPress locally" class="wp-image-5258"/></noscript></figure></div>
    
    
    
    <p>On the next screen, you can choose your preferred language.</p>
    
    
    
    <p>Then, you’ll get a prompt asking you to install <strong>Bitnami for XAMPP.</strong> You do <strong>not</strong> need this to install XAMPP and WordPress, so feel free to uncheck the box. If you leave it enabled, it <em>slightly</em> simplifies the WordPress install process, but I’m going to cover how it works without Bitnami.</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:625/h:530/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-6.png" width="625" height="530" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:313/h:265/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-6.png" alt="how to install XAMPP and WordPress on windows" class="wp-image-5259" data-opt-lazy-loaded="true" style="max-width: 313px;" data-opt-otimized-width="313" data-opt-optimized-height="265"><noscript><img decoding=async  width="625" height="530" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:625/h:530/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-6.png" alt="how to install XAMPP and WordPress on windows" class="wp-image-5259"/></noscript></figure></div>
    
    
    
    <p>Once you click <strong>Next</strong>, you’re ready to run the install:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:623/h:530/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-7.png" width="623" height="530" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:312/h:265/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-7.png" alt="finalize the install" class="wp-image-5260" data-opt-lazy-loaded="true" style="max-width: 312px;" data-opt-otimized-width="312" data-opt-optimized-height="265"><noscript><img decoding=async  width="623" height="530" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:623/h:530/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-7.png" alt="finalize the install" class="wp-image-5260"/></noscript></figure></div>
    
    
    
    <p>The install process might take a few minutes:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:627/h:528/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-8.png" width="627" height="528" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:314/h:264/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-8.png" alt="XAMPP install process" class="wp-image-5261" data-opt-lazy-loaded="true" style="max-width: 314px;" data-opt-otimized-width="314" data-opt-optimized-height="264"><noscript><img decoding=async  width="627" height="528" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:627/h:528/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-8.png" alt="XAMPP install process" class="wp-image-5261"/></noscript></figure></div>
    
    
    
    <p>Once it finishes, you can launch the control panel to start working with XAMPP:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:622/h:530/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-9.png" width="622" height="530" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:311/h:265/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-9.png" alt="go to control panel" class="wp-image-5262" data-opt-lazy-loaded="true" style="max-width: 311px;" data-opt-otimized-width="311" data-opt-optimized-height="265"><noscript><img decoding=async  width="622" height="530" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:622/h:530/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-9.png" alt="go to control panel" class="wp-image-5262"/></noscript></figure></div>
    
    
    
    <h2 id="test-server">Step 2: Start the modules and test your server</h2>
    
    
    
    <p>To install XAMPP and WordPress properly, you’ll need to run two modules:</p>
    
    
    
    <ul><li>Apache</li><li>MySQL</li></ul>
    
    
    
    <p>You can start both modules from the XAMPP control panel:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:833/h:544/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-10.png" width="833" height="544" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:417/h:272/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-10.png" alt="launch the server" class="wp-image-5263" data-opt-lazy-loaded="true" style="max-width: 417px;" data-opt-otimized-width="417" data-opt-optimized-height="272"><noscript><img decoding=async  width="833" height="544" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:833/h:544/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-10.png" alt="launch the server" class="wp-image-5263"/></noscript></figure></div>
    
    
    
    <p>Once you launch them, you should see their status turn to green:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:832/h:544/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-11.png" width="832" height="544" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:416/h:272/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-11.png" alt="database install" class="wp-image-5264" data-opt-lazy-loaded="true" style="max-width: 416px;" data-opt-otimized-width="416" data-opt-optimized-height="272"><noscript><img decoding=async  width="832" height="544" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:832/h:544/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-11.png" alt="database install" class="wp-image-5264"/></noscript></figure></div>
    
    
    
    <p>And now you should be able to test that your local server is working by going to <code>http://localhost/</code> in your web browser of choice:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:1146/h:654/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-12.png" width="1146" height="654" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:570/h:325/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-12.png" alt="everything on localhost" class="wp-image-5265" data-opt-lazy-loaded="true" style="max-width: 570px;" data-opt-otimized-width="570" data-opt-optimized-height="325"><noscript><img decoding=async  width="1146" height="654" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:1146/h:654/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-12.png" alt="everything on localhost" class="wp-image-5265"/></noscript></figure></div>
    
    
    
    <p>If all went well, you now have a functioning XAMPP server on your Windows PC! But now it’s time to install XAMPP <strong>and</strong> WordPress. So here’s how to get a WordPress site up and running on XAMPP.</p>
    
    
    
    <h2 id="add-wordpress-files">Step 3: Add the WordPress files</h2>
    
    
    
    <p>If you’ve ever manually installed WordPress, the rest of the process should feel pretty familiar. First, you need to <a href="https://wordpress.org/" target="_blank" rel="noopener">go to wordpress.org</a> and download the latest version of WordPress.</p>
    
    
    
    <p>Then, in Windows, navigate to the folder where you installed XAMPP. For me, that’s <code>C://xampp</code>. It should be something similar for you. Then, in that folder, find the <strong>htdocs</strong> subfolder:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:789/h:493/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-13.png" width="789" height="493" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:395/h:246/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-13.png" alt="add the files to the folder" class="wp-image-5266" data-opt-lazy-loaded="true" style="max-width: 395px;" data-opt-otimized-width="395" data-opt-optimized-height="246"><noscript><img decoding=async  width="789" height="493" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:789/h:493/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-13.png" alt="add the files to the folder" class="wp-image-5266"/></noscript></figure></div>
    
    
    
    <p>In <strong>htdocs</strong>, create a new folder for your test site. This folder name will become the sub-name used to access your site. For example, if you make the folder <code>testsite</code>, you’ll access your site by going to <code>http://localhost/testsite</code>.</p>
    
    
    
    <p>Once you create the folder, extract the WordPress .zip file you downloaded from wordpress.org into it:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:917/h:622/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-14.png" width="917" height="622" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:459/h:311/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-14.png" alt="target directory" class="wp-image-5267" data-opt-lazy-loaded="true" style="max-width: 459px;" data-opt-otimized-width="459" data-opt-optimized-height="311"><noscript><img decoding=async  width="917" height="622" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:917/h:622/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-14.png" alt="target directory" class="wp-image-5267"/></noscript></figure></div>
    
    
    
    <h2 id="create-wordpress-database">Step 4: Create a database for WordPress</h2>
    
    
    
    <p>Next, you need to create a MySQL database for your WordPress install. To do that, launch PHPMyAdmin from your XAMPP control panel:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:829/h:396/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-15.png" width="829" height="396" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:415/h:198/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-15.png" alt="create the database" class="wp-image-5268" data-opt-lazy-loaded="true" style="max-width: 415px;" data-opt-otimized-width="415" data-opt-optimized-height="198"><noscript><img decoding=async  width="829" height="396" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:829/h:396/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-15.png" alt="create the database" class="wp-image-5268"/></noscript></figure></div>
    
    
    
    <p>Then click on <strong>Databases</strong> at the top:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:738/h:363/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-16.png" width="738" height="363" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:369/h:181/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-16.png" alt="go to databases" class="wp-image-5269" data-opt-lazy-loaded="true" style="max-width: 369px;" data-opt-otimized-width="369" data-opt-optimized-height="181"><noscript><img decoding=async  width="738" height="363" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:738/h:363/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-16.png" alt="go to databases" class="wp-image-5269"/></noscript></figure></div>
    
    
    
    <p>And enter a name for your database and click <strong>Create</strong>. Your name can be anything – just remember it because you’ll need it for the next step:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:779/h:351/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-17.png" width="779" height="351" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:390/h:175/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-17.png" alt="create a database" class="wp-image-5270" data-opt-lazy-loaded="true" style="max-width: 390px;" data-opt-otimized-width="390" data-opt-optimized-height="175"><noscript><img decoding=async  width="779" height="351" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:779/h:351/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-17.png" alt="create a database" class="wp-image-5270"/></noscript></figure></div>
    
    
    
    <p>Unlike installing WordPress on a live web server, when you install XAMPP and WordPress, you don’t need to worry about creating a database user.</p>
    
    
    
    <h2 id="install-wordpress-locally">Step 5: Install WordPress locally via the on-screen installer</h2>
    
    
    
    <p>When you visit your test site, you should see the normal WordPress installer. Remember, your test site is just <code>http://localhost/FOLDERNAME</code>:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:772/h:423/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-18.png" width="772" height="423" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:386/h:211/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-18.png" alt="install WordPress on XAMPP" class="wp-image-5271" data-opt-lazy-loaded="true" style="max-width: 386px;" data-opt-otimized-width="386" data-opt-optimized-height="211"><noscript><img decoding=async  width="772" height="423" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:772/h:423/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-18.png" alt="install WordPress on XAMPP" class="wp-image-5271"/></noscript></figure></div>
    
    
    
    <p>The only step where this process will differ from a normal install is the database details. When you get to the database details, enter them like this:</p>
    
    
    
    <ul><li><strong>Database Name =</strong> Name of the database you created in PHPMyAdmin</li><li><strong>Username =</strong> “root”</li><li><strong>Password =</strong> leave blank</li></ul>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:742/h:410/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-19.png" width="742" height="410" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:371/h:205/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-19.png" alt="database settings when you install WordPress locally" class="wp-image-5272" data-opt-lazy-loaded="true" style="max-width: 371px;" data-opt-otimized-width="371" data-opt-optimized-height="205"><noscript><img decoding=async  width="742" height="410" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:742/h:410/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-19.png" alt="database settings when you install WordPress locally" class="wp-image-5272"/></noscript></figure></div>
    
    
    
    <p>Then finish the rest of the WordPress install process like normal.</p>
    
    
    
    <p>Once you complete the process, you should see your brand new WordPress install running perfectly on your local host:</p>
    
    
    
    <div class="wp-block-image blog-img-std"><figure class="aligncenter"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:1900/h:1372/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/03/new-WordPress-site-installed-on-XAMPP.jpg" width="1900" height="1372" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:570/h:411/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2017/03/new-WordPress-site-installed-on-XAMPP.jpg" alt="new WordPress site installed on XAMPP" class="wp-image-22649" data-opt-lazy-loaded="true" style="max-width: 570px;" data-opt-otimized-width="570" data-opt-optimized-height="411"><noscript><img decoding=async  width="1900" height="1372" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:1900/h:1372/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/03/new-WordPress-site-installed-on-XAMPP.jpg" alt="new WordPress site installed on XAMPP" class="wp-image-22649"/></noscript></figure></div>
    
    
    
    <h2>Troubleshooting common XAMPP errors</h2>
    
    
    
    <p>If you followed our XAMPP tutorial above, you should hopefully be up and running without any issues. However, in rare cases, you might run into some XAMPP errors which require troubleshooting.</p>
    
    
    
    <p>Here are some tips for fixing common XAMPP errors…</p>
    
    
    
    <h3>XAMPP Maximum PHP Execution Time Exceeded error</h3>
    
    
    
    <p>The Maximum PHP Execution Time Exceeded error is a very common issue on WordPress installs that you’ve created with XAMPP.</p>
    
    
    
    <p>Thankfully, you can usually fix it just by editing a single line in one of the XAMPP configuration files.</p>
    
    
    
    <p>To begin, open the XAMPP Control Panel and click the <strong>Config</strong> button next to <strong>Apache</strong>. In the dropdown list, choose the option for <strong>PHP (php.ini)</strong>:</p>
    
    
    
    <figure class="wp-block-image size-full blog-img-std"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:928/h:537/q:98/https://s15165.pcdn.co/wp-content/uploads/2022/01/xampp-troubleshooting-1.png" width="928" height="537" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:570/h:329/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2022/01/xampp-troubleshooting-1.png" alt="Open php.ini file in XAMPP" class="wp-image-47903" data-opt-lazy-loaded="true" style="max-width: 570px;" data-opt-otimized-width="570" data-opt-optimized-height="329"><noscript><img decoding=async  width="928" height="537" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:928/h:537/q:98/https://s15165.pcdn.co/wp-content/uploads/2022/01/xampp-troubleshooting-1.png" alt="Open php.ini file in XAMPP" class="wp-image-47903"/></noscript></figure>
    
    
    
    <p>This should open the <code>php.ini</code> file in your default text editor.</p>
    
    
    
    <p>In the file, search for the following line:</p>
    
    
    
    <p><code>max_execution_time</code></p>
    
    
    
    <p>You should see something like <code>max_execution_time=120</code>.</p>
    
    
    
    <p>To fix the XAMPP Maximum PHP Execution Time Exceeded error, all you need to do is increase the value of the number. For example, you could try doubling it to <code>240</code>.</p>
    
    
    
    <h3>XAMPP Maximum File Size Exceeded error</h3>
    
    
    
    <p>The Maximum File Size Exceeded error is another common problem that you might see when you try to upload files to the local WordPress site that you created with XAMPP.</p>
    
    
    
    <p>Thankfully, it’s easy to fix. In fact, you can fix it from the exact same spot where you fixed the previous error – the <code>php.ini</code> file.</p>
    
    
    
    <p>To begin, open the <code>php.ini</code> file (<em>you can follow the steps in the previous section</em>).</p>
    
    
    
    <p>Then, search for the following line:</p>
    
    
    
    <p><code>upload_max_filesize</code></p>
    
    
    
    <p>You might see something like <code>upload_max_filesize=40M</code>.</p>
    
    
    
    <p>To increase the upload limit and fix the error, all you need to do is increase the number. For example, you could make it  <code>upload_max_filesize=40M.</code></p>
    
    
    
    <p>While you’re editing the <code>php.ini</code> file, you’ll also want to make the same change to the <code>post_max_size</code> number.</p>
    
    
    
    <h3>XAMPP Apache Shutdown Unexpectedly error</h3>
    
    
    
    <p>This error means that something went wrong with Apache that caused it to crash. Apache is the webserver that XAMPP relies on, so a crash in Apache means your local development sites will stop working.</p>
    
    
    
    <p>Because this is such a critical error, we have an entire guide on <a href="https://themeisle.com/blog/xampp-error-apache-shutdown-unexpectedly/">how to fix the XAMPP Apache Shutdown Unexpectedly error</a>.</p>
    
    
    
    <h3>Error 403 – XAMPP access forbidden error</h3>
    
    
    
    <p>Another common error message is the XAMPP access forbidden error, which typically manifests as a 403 error when you try to access your database with phpMyAdmin (or sometimes other pages).</p>
    
    
    
    <p>Typically, this happens because of a misconfiguration in one of the XAMPP configuration files.</p>
    
    
    
    <p>To fix this, click on the <strong>Config</strong> button next to <strong>Apache</strong> in the XAMPP Control Panel. </p>
    
    
    
    <p>From the dropdown, select the <code>httpd-xampp.conf</code> file, which should automatically open it in your default text editor.</p>
    
    
    
    <figure class="wp-block-image size-full blog-img-std"><img decoding="async" data-opt-src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:920/h:538/q:98/https://s15165.pcdn.co/wp-content/uploads/2022/01/xampp-troubleshooting-2.png" width="920" height="538" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:570/h:333/q:98/dpr:2.0/https://s15165.pcdn.co/wp-content/uploads/2022/01/xampp-troubleshooting-2.png" alt="Open httpd.conf file in XAMPP" class="wp-image-47904" data-opt-lazy-loaded="true" style="max-width: 570px;" data-opt-otimized-width="570" data-opt-optimized-height="333"><noscript><img decoding=async  width="920" height="538" src="https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:920/h:538/q:98/https://s15165.pcdn.co/wp-content/uploads/2022/01/xampp-troubleshooting-2.png" alt="Open httpd.conf file in XAMPP" class="wp-image-47904"/></noscript></figure>
    
    
    
    <p>Look for a line of code that starts with <code>Alias /phpmyadmin.</code></p>
    
    
    
    <p>Within that code block, you should see a line that says <code>Require local</code>. Change that line to say <code>Require all granted</code> instead.</p>
    
    
    
    <p>That should fix the XAMPP database access forbidden error and give you access to phpMyAdmin.</p>
    
    
    
    <h2>What about multisite or staging?</h2>
    
    
    
    <h3>How to install XAMPP and WordPress multisite</h3>
    
    
    
    <p>If you want to play around with <a href="https://themeisle.com/blog/what-is-wordpress-multisite/">WordPress multisite</a>, it’s also possible to configure WordPress multisite to work on your local host. Rather than duplicating information, though, I’ll just direct you to Vishnu’s post on <a href="https://themeisle.com/blog/install-wordpress-multisite-on-local-host/">how to set up WordPress multisite on a local host</a>.</p>
    
    
    
    <h3>Should you use XAMPP and WordPress for staging?</h3>
    
    
    
    <p>While running WordPress on your localhost is a great way to experiment and try things with WordPress, you shouldn’t use it as an actual staging site for a live site.</p>
    
    
    
    <p>That’s because it has a different hardware configuration than your live site. So just because something works or doesn’t work on your XAMPP WordPress install doesn’t mean it will be the same on your live production site.</p>
    
    
    
    <p>Instead, using a subdomain or your host’s staging service are much better ways to <a href="https://themeisle.com/blog/wordpress-staging-site/">create a WordPress staging site</a>. You can also use <a href="https://themeisle.com/blog/best-wordpress-staging-plugins/">a dedicated WordPress staging plugin</a>.</p>
    
    
    
    <h2>Wrapping things up on how to install WordPress locally on XAMPP</h2>
    
    
    
    <div class="wp-block-columns">
    <div class="wp-block-column" style="flex-basis:40%">
    <p>Once you learn how to install XAMPP and WordPress the first time, you can quickly spin up new testing sites whenever needed.</p>
    </div>
    
    
    
    <div class="wp-block-column" style="flex-basis:60%">
            <div class="ti-tweet-clear"></div>
                <div class="ti-tweet_wrapper">
                    <div class="ti-tweet_text">
                        <a href="https://twitter.com/share?text=How+to+install+%23WordPress+locally+on+%23XAMPP+%F0%9F%92%A1&amp;via=themeisle&amp;related=themeisle&amp;url=https://themeisle.com/blog/install-xampp-and-wordpress-locally/" target="_blank">How to install #WordPress locally on #XAMPP 💡</a>
                    </div>
                    <div class="ti-tweet_sharebtn">
                    <a href="https://twitter.com/share?text=How+to+install+%23WordPress+locally+on+%23XAMPP+%F0%9F%92%A1&amp;via=themeisle&amp;related=themeisle&amp;url=https://themeisle.com/blog/install-xampp-and-wordpress-locally/" target="_blank">Click To Tweet 
                        <span></span>
                    </a>
                </div>
            </div>
    </div>
    </div>
    
    
    
    <p>As a freelance writer, I use XAMPP installs to review any number of themes and plugins. At this point, I probably have about 60 separate WordPress installs running on XAMPP. So if you need any assistance with XAMPP and WordPress, leave a comment and I’ll try to help out!</p>
    
    
    
    <p>If you’re interested in some other ways to create local WordPress development sites, we also have a lot of other useful guides:</p>
    
    
    
    <ul><li><a href="https://themeisle.com/blog/local-by-flywheel-wordpress-on-mac/">Using Local for local WordPress development</a></li><li><a href="https://themeisle.com/blog/local-wordpress-development-desktopserver/">Using DesktopServer for local WordPress development</a></li><li><a href="https://themeisle.com/blog/local-wordpress-development-using-docker/">Creating Docker containers for local development</a></li></ul>
    
    
    
    <p><strong><em>Do you still have any questions about how to install WordPress locally with XAMPP? Let us know in the comments!</em></strong></p>
    
    
    <div class="ti_ad pirate">
            <h5>Free guide</h5>
            <h3>5 Essential Tips to Speed Up <br>Your WordPress Site</h3>
            <h4>Reduce your loading time by even 50-80% <br>just by following simple tips.</h4>
            <a href="https://app.monstercampaigns.com/c/lhkifzgco5uonmkjpkbv/" class="sidebar-btn" rel="nofollow" target="_blank">Download free guide</a>
        </div>
    
    
    
    <p><span style="color: #909090;">* This post contains affiliate links, which means that if you click on one of the product links and then purchase the product, we’ll receive a commission. No worries though, you’ll still pay the standard amount so there’s no cost on your part.</span></p>
    
    
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "HowTo",
      "name": "How to Install WordPress Locally on Windows PC",
      "description": "Want to install XAMPP and WordPress – aka. install WordPress locally? This is a great idea if you want a development site that can be used for testing or other purposes. XAMPP lets you run a website from your very own computer. And once you get it set up, you can spin up a new WordPress install with just a few clicks.",
      "url": "https://themeisle.com/blog/install-xampp-and-wordpress-locally/",
      "image": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/03/install-WordPress-locally-on-XAMPP.jpg",
      "step": [
        {
        "@type": "HowToSection",
        "name": "How to Install WordPress Locally on Windows PC",
        "image": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/03/install-WordPress-locally-on-XAMPP.jpg",
        "url": "https://themeisle.com/blog/install-xampp-and-wordpress-locally/",
          "itemListElement": [
            {
            "@type": "HowToStep",
            "position": "1",
            "name": "Download and install XAMPP",
            "text": "Download and install XAMPP on your computer - The first step on your way to install WordPress locally is to download and install the XAMPP software.",
            "url": "https://themeisle.com/blog/install-xampp-and-wordpress-locally/#download-install-xampp",
            "image": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/03/xampp.jpg",
            "itemListElement": [
                {
                  "@type": "HowToDirection",
                  "position": "1",
                  "text": "You can download the Windows installer file <a href='https://www.apachefriends.org/index.html'>from Apache Friends</a></li>; It's a big file, about 110 MB, so it might take a minute or so depending on your connection:",
                  "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/03/xampp.jpg"
                },
                {
                  "@type": "HowToDirection",
                  "position": "2",
                  "text": "Once the download finishes, run the file you downloaded to launch the XAMPP installer; If you're running antivirus software, and get a warning like this, just click <b>Yes</b> to continue:",
                   "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-2.png"
                },
                {
                  "@type": "HowToDirection",
                  "position": "3",
                  "text": "Depending on your Windows configuration, you might also get a prompt about User Account Control (UAC); Just continue through that prompt as well; Once you get through all of the prompts, you should see the standard installer screen; Just click <b>Next</b> to continue.",
                  "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-3.png"
                },
                {
                  "@type": "HowToDirection",
                  "position": "4",
                  "text": "On the next screen, you can choose which components to install: To install XAMPP and WordPress, in addition to the required components, all you need are: MySQL, PHPMyAdmin; Uncheck everything else and click <b>Next</b>.",
                 "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-4.png"
                },
                {
                "@type": "HowToDirection",
                "position": "5",
                "text": "You can now select which folder to install XAMPP in; you can leave it as the default:",
                "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-5.png"
                },
                {
                "@type": "HowToDirection",
                "position": "6",
                "text": "On the next screen, you'll get a prompt asking you to install Bitnami for XAMPP. You do not need this to install XAMPP and WordPress, so just <b>uncheck the box</b>.",
                "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-6.png"
                },
                {
               "@type": "HowToDirection",
               "position": "7",
               "text": "Once you click <b>Next</b>, the install will start to run:",
               "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-7.png"
                },
                {
               "@type": "HowToDirection",
               "position": "8",
               "text": "The install process might take a few minutes:",
               "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-8.png"
                },
                {
               "@type": "HowToDirection",
               "position": "9",
               "text": "Once it finishes, you can launch the control panel to start working with XAMPP:",
               "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-9.png"
                }     
              ]
            },
            {
            "@type": "HowToStep",
            "position": "2",
            "name": "Start the modules and test server",
            "text": "Start the modules and test your server - The next step is to start the modules and test your server.",  
            "url": "https://themeisle.com/blog/install-xampp-and-wordpress-locally/#test-server",
            "image": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-10.png",
              "itemListElement": [
                {
                "@type": "HowToDirection",
                "position": "1",
                "text": "To install XAMPP and WordPress properly, you'll need to run two modules: <b>Apache</b> and <b>MySQL</b>; You can start both modules from the XAMPP control panel:",
                "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-10.png"
                },
                {
               "@type": "HowToDirection",
               "position": "2",
               "text": "Once you launch them, you should see their status turn to green:",
               "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-11.png"
                },
                {
               "@type": "HowToDirection",
               "position": "3",
               "text": "And now you should be able to test that your local server is working by going to <b>http://localhost/</b> in your web browser of choice; If all went well, you now have a functioning XAMPP server on your Windows PC; But now it's time to install XAMPP and WordPress, <b>so here's how to get a WordPress site up and running on XAMPP</b>.",
               "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-12.png"
                }
              ]
            },
            {
              "@type": "HowToStep",
              "position": "3",
              "name": "Add the WordPress files",
              "text": "Add the WordPress files - If you've ever manually installed WordPress, the rest of the process should feel familiar.",
               "url": "https://themeisle.com/blog/install-xampp-and-wordpress-locally/#add-wordpress-files",
               "image": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-13.png",
              "itemListElement": [
                {
                "@type": "HowToDirection",
                "position": "1",
                "text": "First, you need to go to <b>wordpress.org</b> and download the latest version of WordPress; Then, in Windows, navigate to the folder where you installed XAMPP; For me, that's <b>C://xampp</b> so it should be something similar for you; Then, in that folder, find the <b>htdocs</b> subfolder:",
                "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-13.png"
                },
                {
                "@type": "HowToDirection",
                "position": "2",
                "text": "In htdocs, create a new folder for your test site; This folder name will become the sub-name used to access your site; For example, if you make the folder testsite, you'll access your site by going to <b>http://localhost/testsite</b> and once you create the folder, extract the WordPress .zip file you downloaded from wordpress.org into it:",
                "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-14.png"
                }
              ]
            },
            {
              "@type": "HowToStep",
              "position": "4",
              "name": "Create database for WordPress",
              "text": "Create a database for WordPress - Next, you need to create a MySQL database for your WordPress install.",
              "url": "https://themeisle.com/blog/install-xampp-and-wordpress-locally/#create-wordpress-database",
               "image": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-15.png",
              "itemListElement": [
                {
                "@type": "HowToDirection",
                "position": "1",
                "text": "To <b>create a MySQL database</b> for your WordPress install, <b>launch PHPMyAdmin</b> from your XAMPP control panel:",
                "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-15.png"
                },
                {
               "@type": "HowToDirection",
               "position": "2",
               "text": "Then click on <b>Databases</b> at the top:",
               "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-16.png"
                },
              {
               "@type": "HowToDirection",
               "position": "3",
               "text": "And enter a name for your database and click <b>Create</b>; Your name can be anything – just remember it because you'll need it for the next step:",
              "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-17.png"
                },
               {
              "@type": "HowToTip",
              "position": "4",
              "text": "Unlike installing WordPress on a live web server, when you install XAMPP and WordPress, you don't need to worry about creating a database user."
                }
              ]
            },
            {
              "@type": "HowToStep",
              "position": "5",
              "name": "Install WordPress locally",
              "text": "Install WordPress locally via the on-screen installer",
              "url": "https://themeisle.com/blog/install-xampp-and-wordpress-locally/#install-wordpress-locally",
              "image": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-18.png",
              "itemListElement": [
                {
               "@type": "HowToDirection",
               "position": "1",
               "text": "When you visit your test site, you should see the normal WordPress installer; Remember, your test site is just <b>http://localhost/FOLDERNAME</b>:",
               "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-18.png"
                },
                {
                "@type": "HowToDirection",
                "position": "2",
                "text": "The only step where this process will differ from a normal install is the database details; When you get to the database details, enter them like this: <b>Database Name</b> = Name of the database you created in PHPMyAdmin, <b>Username</b> = “root”, <b>Password</b> = leave blank",
               "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/02/how-to-install-xampp-and-wordpress-19.png"
                },
               {
                "@type": "HowToDirection",
                "position": "3",
                "text": "Then finish the rest of the WordPress install process like normal; Once you complete the process, you should see your brand new WordPress install running perfectly on your local host:",
                "duringMedia": "https://mllj2j8xvfl0.i.optimole.com/Lsv2lkg.cHDL~36fa1/w:auto/h:auto/q:98/https://s15165.pcdn.co/wp-content/uploads/2017/03/new-WordPress-site-installed-on-XAMPP.jpg"
                },
                {
                  "@type": "HowToTip",
                  "position": "4",
                  "text": "<b>What about Multisite or staging</b> - If you want to play around with WordPress Multisite, it's also possible to configure WordPress Multisite to work on your local host; Rather than duplicating information, though, I'll just direct you to Vishnu's post on <a href='https://themeisle.com/blog/install-wordpress-multisite-on-local-host/'>how to set up WordPress Multisite on a local host</a>."
                },
                {   
                  "@type": "HowToTip",
                  "position": "5",
                  "text": "<b>Should you use XAMPP and WordPress for staging</b> - While running WordPress on your localhost is a great way to experiment and try things with WordPress, you shouldn't use it as an actual staging site for a live site; That's because it has a different hardware configuration than your live site, so just because something works or doesn't work on your XAMPP WordPress install doesn't mean it will be the same on your live production site; Instead, using a subdomain or your host's staging service are much better ways to <a href='https://themeisle.com/blog/wordpress-staging-site/'>create a WordPress staging site</a>."
                },
                {   
                  "@type": "HowToTip",
                  "position": "6",
                  "text": "<b>Wrapping things up on how to install WordPress locally on XAMPP:</b> Once you learn how to install XAMPP and WordPress the first time, you can quickly spin up new testing sites whenever needed."
                }
              ]
            }
          ]
        }
      ]
    }
    </script>
</article>