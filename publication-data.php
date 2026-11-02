<?php
/* =========================================================
   PUBLICATIONS DATA
   Add new articles by copying an array block below.
   ========================================================= */

$publications = [

    /* ---------- Taylor Swift Article ---------- */
    [
        'slug'       => 're-recording-restrictions-taylor-swift',
        'title'      => 'Re-Recording Restrictions: The Taylor Swift Angle',
        'subtitle'   => 'How one artist\'s fight for ownership reshaped the way record labels protect their masters.',
        'type'       => 'article',
        'type_label' => 'Journal Article',
        'category'   => 'Entertainment Law',
        'image'      => 'publications/re-recording-restrictions-taylor-swift.jpeg',
        'author'     => 'Chinecherem Maureen Anatuanya',
        'author_secondary' => 'Chidera Jennifer Odidika',
        'author_img' => 'team/chinecherem-anatuanya.jpg',
        'author_bio' => 'Attorney at Stetson LLP, writing on entertainment law, intellectual property, and the evolving relationship between artists and the music industry.',
        'date'       => '2025-10-14',
        'read'       => '7 min read',

        'body' => '
<h2>What\'s a Re-Recording Restriction?</h2>
<p>A re-recording restriction is a contractual provision that prevents an artist from recording new versions of works created under a previous recording agreement for a specified period.</p>
<p>The clause exists to protect the label\'s investment in those recordings. Since the label finances the creation, promotion, and distribution of the works, it prevents the artist from immediately re-recording and releasing identical material elsewhere. Without such restrictions, duplicate versions could compete with the label\'s masters and reduce their commercial value.</p>

<h2>Taylor Swift vs. Big Machine Records</h2>
<p>A dispute that highlighted the importance of this clause was the conflict between Taylor Swift and Big Machine Records.</p>
<p>In 2005, at just 15 years old, Swift signed a recording deal with Big Machine Records. Under that agreement, she released six albums — <em>Taylor Swift</em>, <em>Fearless</em>, <em>Speak Now</em>, <em>Red</em>, <em>1989</em>, and <em>Reputation</em>. Big Machine owned the masters to all songs on those albums, while Swift retained rights in the compositions because she was their songwriter.</p>

<blockquote>In copyright law, a song is split into two rights: the sound recording (the masters) and the composition (the melody and lyrics). When a label funds the recording, it typically owns the masters.</blockquote>

<p>After 13 years, Swift left Big Machine and signed with Universal Music Group. By then, she was already a global superstar. Her attempt to buy back her masters failed. Instead, Big Machine was sold to Ithaca Holdings, giving Scooter Braun control of her early catalogue. Braun later sold the label to Shamrock Holdings, transferring ownership of Swift\'s masters along with it.</p>
<p>Swift responded by re-recording four of her six Big Machine albums. Under her Universal deal, she owned the new masters, which she branded as <strong>Taylor\'s Version</strong>. This created two sets of masters: the originals, owned by Shamrock Holdings, and the re-recordings, owned by Swift herself.</p>
<p>Because Swift already controlled the compositions, she was able to re-record her catalogue and secure ownership of the new masters. Without publishing rights, this would not have been possible. The re-recordings achieved significant commercial success, diminishing the value of Shamrock\'s masters and reshaping industry discussions around artist rights and ownership.</p>

<h2>Impact on Re-Recording Restrictions</h2>
<p>Re-recording restrictions existed long before Swift\'s dispute. For example:</p>
<ul>
    <li><strong>Prince</strong> re-recorded <em>1999</em> and released <em>1999: The New Master</em> after his conflict with Warner Bros., while Warner retained the originals.</li>
    <li><strong>JoJo</strong> re-recorded her first two albums following a dispute with Blackground Records, citing limited fan access to her original music.</li>
</ul>
<p>However, the success of <em>Taylor\'s Version</em> amplified industry attention. Swift\'s move challenged traditional power dynamics between artists and labels, inspiring other artists to consider reclaiming ownership of their masters.</p>
<p>In response, labels have tightened re-recording clauses. Reports suggest some now extend restrictions to 20 or even 30 years, with certain contracts seeking perpetual bans.</p>
<p>These restrictions act as safeguards. Labels invest heavily in artists, covering advances, studio costs, producers, engineers, musicians, videos, marketing, distribution, and promotion. Masters are valuable assets, and re-recording restrictions protect that investment.</p>
<p>Typically, such clauses prevent artists from re-creating and releasing new versions of recordings delivered under their agreements for three to five years after the contract term. Following Swift\'s success, some labels have extended this to 10–15 years, or indefinitely. The goal is to allow labels to recoup their expenditures and maximize the value of their master rights by preventing direct competition from alternate versions.</p>

<div class="references">
    <h2>References</h2>
    <ol>
        <li>Naik Naik &amp; Co. (2024, October 30). <em>The Swiftie Effect: How Taylor Swift\'s Re-Recording Project Has Impacted Record Labels.</em></li>
        <li>Rolling Stone Culture Council. <em>What Is the Role of a Record Label in Today\'s Music Business?</em> Rolling Stone.</li>
        <li>Milano, B. (2024, April 3). <em>Taylor\'s Version of Copyright.</em> Harvard Law School, Harvard Law Today.</li>
        <li>Tavern, M. (2019, August 6; updated April 21). <em>For the (Re-)Record: Here\'s What You Need to Know About Re-Recording Restrictions.</em> Synchtank.</li>
    </ol>
</div>
',
    ],

    /* ---------- Add more articles below ---------- */
    // [
    //     'slug' => 'example-slug',
    //     'title' => 'Your Next Article Title',
    //     ...
    // ],

];

/* Helpers */
function find_publication($slug) {
    global $publications;
    foreach ($publications as $p) {
        if ($p['slug'] === $slug) return $p;
    }
    return null;
}

function pretty_date($d) {
    return date('F j, Y', strtotime($d));
}