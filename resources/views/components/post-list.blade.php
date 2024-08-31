<div class="p-2">
    @php
        // $posts = collect([
        //     [
        //         'slug' => 'a-new-post',
        //         'title' => 'A new post',
        //         'description' => 'This is a new post',
        //         'image' => 'https://picsum.photos/200/300',
        //         'price' => '1000',
        //         'location' => 'Bhilai',
        //     ],
        //     [
        //         'slug' => 'another-new-post',
        //         'title' => 'Another new post',
        //         'description' => 'This is another new post',
        //         'image' => 'https://picsum.photos/200/300',
        //         'price' => '1000',
        //         'location' => 'Nehru Nagar',
        //     ],
        //     [
        //         'slug' => 'yet-another-new-post',
        //         'title' => 'Yet another new post',
        //         'description' => 'This is yet another new post',
        //         'image' => 'https://picsum.photos/200/300',
        //         'price' => '1000',
        //         'location' => 'Bhilai',
        //     ],
        //     [
        //         'slug' => 'yet-another-new-post',
        //         'title' => 'Yet another new post',
        //         'description' => 'This is yet another new post',
        //         'image' => 'https://picsum.photos/200/300',
        //         'price' => '1000',
        //         'location' => 'Bhilai',
        //     ],
        //     [
        //         'slug' => 'yet-another-new-post',
        //         'title' => 'Yet another new post',
        //         'description' => 'This is yet another new post',
        //         'image' => 'https://picsum.photos/200/300',
        //         'price' => '1000',
        //         'location' => 'Bhilai',
        //     ],
        //     [
        //         'slug' => 'yet-another-new-post',
        //         'title' => 'Yet another new post',
        //         'description' => 'This is yet another new post',
        //         'image' => 'https://picsum.photos/200/300',
        //         'price' => '1000',
        //         'location' => 'Bhilai',
        //     ],
        //     [
        //         'slug' => 'yet-another-new-post',
        //         'title' => 'Yet another new post',
        //         'description' => 'This is yet another new post',
        //         'image' => 'https://picsum.photos/200/300',
        //         'price' => '1000',
        //         'location' => 'Bhilai',
        //     ],
        //     [
        //         'slug' => 'yet-another-new-post',
        //         'title' => 'Yet another new post',
        //         'description' => 'This is yet another new post',
        //         'image' => 'https://picsum.photos/200/300',
        //         'price' => '1000',
        //         'location' => 'Bhilai',
        //     ],
        //     [
        //         'slug' => 'yet-another-new-post',
        //         'title' => 'Yet another new post',
        //         'description' => 'This is yet another new post',
        //         'image' => 'https://picsum.photos/200/300',
        //         'price' => '1000',
        //         'location' => 'Bhilai',
        //     ],
        // ]);
    @endphp
    <p>Fresh recommendation</p>
    <x-post-iterator :posts="$posts" />
</div>
