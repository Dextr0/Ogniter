<?php if($environment!='local') { ?>
<div class="box above-me">
    <div class="well above-me">
        <div id="disqus_thread"></div>
        <script>

            var disqus_config = function () {
                this.page.url = "https://ogniter.net{{ $currentPath }}";  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = "{{ ltrim($currentPath,'/') }}";
            };
            (function() {  // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = '//ogniter.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
    </div>
</div>
<?php } ?>