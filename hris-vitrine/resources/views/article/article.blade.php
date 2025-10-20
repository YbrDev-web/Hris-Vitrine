<rss version="2.0">
<channel>
    <title>HRIS PRO Consulting - What's New</title>
    <link>{{ url('/') }}</link>
    <description>Les dernières actualités Workday & SIRH</description>
    <language>fr</language>

    @foreach($articles as $article)
        <item>
            <title><![CDATA[{{ $article->titre }}]]></title>
            <link>{{ url('/articles/'.$article->id) }}</link>
            <description><![CDATA[{!! Str::limit(strip_tags($article->contenu), 200) !!}]]></description>
            <author><![CDATA[{{ $article->auteur ?? 'HRIS PRO Team' }}]]></author>
            <pubDate>{{ $article->created_at->toRfc2822String() }}</pubDate>
        </item>
    @endforeach
</channel>
</rss>
