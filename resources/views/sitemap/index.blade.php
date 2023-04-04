<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @if($post != null)
        @foreach ($post as $route)
            @php $arr = ["sanctum/csrf-cookie","_ignition/health-check","_ignition/execute-solution","_ignition/update-config","api/user","/","sitemap.xml"]; @endphp
                @if(!in_array($route->uri,$arr))
                    <sitemap>
                        <loc>{{url('/')}}/{{ $route->uri }}</loc>
                        <lastmod>{{ \Carbon\Carbon::now()->tz('UTC')->toAtomString() }}</lastmod>
                    </sitemap>
                @endif
        @endforeach
    @endif
</sitemapindex>
