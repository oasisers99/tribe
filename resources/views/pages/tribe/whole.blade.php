@extends('layouts.tribe')

@section('title', 'Tribe Main')

@section('body-content')

    <div id="header">
        <p><a href="/">&laquo; Back to Front</a></p>
        <h1>Tribe Main Page (in progress...)</h1>
        <ul>
            <li><a href="http://matthewjamestaylor.com/blog/perfect-3-column.htm" class="active">Tribe <span>Main</span></a></li>
            {{--<li><a href="http://matthewjamestaylor.com/blog/perfect-3-column-blog-style.htm">3 Column <span>Blog Style</span></a></li>--}}
            {{--<li><a href="http://matthewjamestaylor.com/blog/perfect-2-column-left-menu.htm">2 Column <span>Left Menu</span></a></li>--}}
            {{--<li><a href="http://matthewjamestaylor.com/blog/perfect-2-column-right-menu.htm">2 Column <span>Right Menu</span></a></li>--}}
            {{--<li><a href="http://matthewjamestaylor.com/blog/perfect-2-column-double-page.htm">2 Column <span>Double Page</span></a></li>--}}
            {{--<li><a href="http://matthewjamestaylor.com/blog/perfect-full-page.htm">1 Column <span>Full Page</span></a></li>--}}
            {{--<li><a href="http://matthewjamestaylor.com/blog/perfect-stacked-columns.htm">Stacked <span>columns</span></a></li>--}}
        </ul>
        <p id="layoutdims">Tribe since ((date))</p>
    </div>
    <div class="colmask threecol">
        <div class="colmid">
            <div class="colleft">
                <div class="col1">
                    <!-- Column 1 start -->
                    <h2>Tribe main pane</h2>
                    {{--<img src="perfect-3-column-dimensions.gif" width="350" height="370" alt="Three column layout dimensions" />--}}
                    <p>Under construction.</p>
                    <h3>ToDo: Display tribe's main activities</h3>
                    {{--<p>To prevent wide content (like long URLs) from destroying the layout (long content can make the page scroll horizontally) the column content divs are set to overflow:hidden. This chops off any content that is wider than the div. Because of this, it's important to know the maximum widths allowable at common screen resolutions. For example, if you choose 800 x 600 pixels as your minimum compatible resolution what is the widest image that can be safely added to each column before it gets chopped off? Here are the figures:</p>--}}
                    {{--<dl>--}}
                        {{--<dt><strong>800 x 600</strong></dt>--}}
                        {{--<dd>Left &amp; right columns: 162 pixels</dd>--}}
                        {{--<dd>Center page: 357 pixels</dd>--}}
                        {{--<dt><strong>1024 x 768</strong></dt>--}}
                        {{--<dd>Left &amp; right columns: 210 pixels</dd>--}}
                        {{--<dd>Center page: 459 pixels</dd>--}}
                    {{--</dl>--}}
                    {{--<h2>The nested div structure</h2>--}}
                    {{--<p>I've colour coded each div so it's easy to see:</p>--}}
                    {{--<img src="perfect-3-column-div-structure.gif" width="350" height="369" alt="Three column layout nested div structure" />--}}
                    {{--<p>The header, colmask and footer divs are 100% wide and stacked vertically one after the other. Colmid is inside colmask and colleft is inside colmid. The three column content divs (col1, col2 &amp; col3) are inside colleft. Notice that the main content column (col1) comes before the other columns.</p>--}}
                    <!-- Column 1 end -->
                </div>
                <div class="col2" style="height: 600px">
                    <!-- Column 2 start -->
                    <h2>Widget pane</h2>
                    <p>ToDo: put widgets for tribe</p>

                    {{--<h2>SEO friendly 2-1-3 column ordering</h2>--}}
                    {{--<p>The higher up content is in your page code, the more important it is considered by search engine algorithms (see my article on <a href="http://matthewjamestaylor.com/blog/link-source-ordering-seo">link source ordering</a> for more details on how this affects links). To make your website as optimised as possible, your main page content must come before the side columns. This layout does exactly that: The center page comes first, then the left column and finally the right column (see the nested div structure diagram for more info). The columns can also be configured to any other order if required.</p>--}}
                    {{--<h2>Full length column background colours</h2>--}}
                    {{--<p>In this layout the background colours of each column will always stretch to the length of the longest column. This feature was traditionally only available with table based layouts but now with a little CSS trickery we can do exactly the same with divs. Say goodbye to annoying short columns! You can read my article on <a href="http://matthewjamestaylor.com/blog/equal-height-columns-cross-browser-css-no-hacks">equal height columns</a> if you want to see how this is done.</p>--}}
                    {{--<h2>No Images</h2>--}}
                    {{--<p>This layout requires no images. Many CSS website designs need images to colour in the column backgrounds but that is not necessary with this design. Why waste bandwidth and precious HTTP requests when you can do everything in pure CSS and XHTML?</p>--}}
                    {{--<h2>No JavaScript</h2>--}}
                    {{--<p>JavaScript is not required. Some website layouts rely on JavaScript hacks to resize divs and force elements into place but you won't see any of that nonsense here. The JavaScript at the bottom of this page is just my Google Analytics tracking code, you can remove this when you use the layout.</p>--}}
                    {{--<h2>Resizable text compatible</h2>--}}
                    {{--<p>This layout is fully compatible with resizable text. Resizable text is important for web accessibility. People who are vision impaired can make the text larger so it's easier for them to read. It is becoming increasingly more important to make your website resizable text compatible because people are expecting higher levels of web accessibility. Apple have made resizing the text on a website simple with the pinch gesture on their multi-touch trackpad. Is your website text-resizing compatible?</p>--}}
                    {{--<h2>No Quirks Mode</h2>--}}
                    {{--<p>This liquid layout does not require the XML declaration for it to display correctly in older versions of Internet Explorer. This version works without it and is thus never in quirks mode.</p>--}}
                    {{--<h2>No IE Conditional Comments</h2>--}}
                    {{--<p>Only one stylesheet is used with this layout This means that IE conditional comments are not needed to set extra CSS rules for older versions of Internet Explorer.</p>--}}
                    <!-- Column 2 end -->
                </div>
                <div class="col3">
                    <!-- Column 3 start -->
                    {{--<div id="ads">--}}
                        {{--<a href="http://matthewjamestaylor.com">--}}
                            {{--<img src="mjt-125x125.gif" width="125" border="0" height="125" alt="Art and Design by Matthew James Taylor" />--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    <h2>Members</h2>
                    <p>ToDo: list tribe's members</p>
                    {{--<h3>iPhone &amp; iPod Touch</h3>--}}
                    {{--<ul>--}}
                        {{--<li>Safari</li>--}}
                    {{--</ul>--}}
                    {{--<h3>Mac</h3>--}}
                    {{--<ul>--}}
                        {{--<li>Safari</li>--}}
                        {{--<li>Firefox</li>--}}
                        {{--<li>Opera 9.25</li>--}}
                        {{--<li>Netscape 9.0.0.5 &amp; 7.1</li>--}}
                    {{--</ul>--}}
                    {{--<h3>Windows</h3>--}}
                    {{--<ul>--}}
                        {{--<li>Firefox 1.5, 2 &amp; 3</li>--}}
                        {{--<li>Safari</li>--}}
                        {{--<li>Opera 8.1 &amp; 9</li>--}}
                        {{--<li>Google Chrome</li>--}}
                        {{--<li>Explorer 5.5, 6 &amp; 7</li>--}}
                        {{--<li>Netscape 8</li>--}}
                    {{--</ul>--}}
                    {{--<h2>Valid XHTML strict markup</h2>--}}
                    {{--<p>The HTML in this layout validates as XHTML 1.0 strict.</p>--}}
                    {{--<h2>This layout is FREE for anyone to use</h2>--}}
                    {{--<p>That's right, you don't have to pay anything. If you are feeling generous however, link back to this page so other people can find and use this layout too.</p>--}}
                    {{--<h2>Centered menus compatible</h2>--}}
                    {{--<p>This layout is fully compatible with my <a href="http://matthewjamestaylor.com/blog/beautiful-css-centered-menus-no-hacks-full-cross-browser-support">cross-browser compatible centered menus</a>.</p>--}}
                    <!-- Column 3 end -->
                </div>
            </div>
        </div>
    </div>
    <div id="footer" style="position: fixed; bottom: 0px; width: 100%">
        <p>This page uses the <a href="http://matthewjamestaylor.com/blog/perfect-3-column.htm">Perfect 'Holy Grail' 3 Column Liquid Layout</a> by <a href="http://matthewjamestaylor.com">Matthew James Taylor</a>. View more <a href="http://matthewjamestaylor.com/blog/-website-layouts">website layouts</a> and <a href="http://matthewjamestaylor.com/blog/-web-design">web design articles</a>.</p>
    </div>
@endsection