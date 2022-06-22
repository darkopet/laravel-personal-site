
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <?php    
            // echo"<pre>";
            // var_dump($posts);
            // echo"</pre>";
            // die;
            ?>
            @if ($posts->count())
                <?php    
                // echo"<pre>";
                // var_dump($posts);
                // echo"</pre>";
                // die;
                ?>
                <x-posts-grid :posts="$posts" /> 
                    {{ $posts->links() }}
            @else
                <p class="text-center">No articles yet.</p>
            @endif
        </main> 
