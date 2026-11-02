<?php
include 'layouts/header.php';
include 'publication-data.php';

/* Read slug from ?slug= OR from PATH_INFO (publication.php/some-slug) */
$slug = '';
if (!empty($_GET['slug'])) {
    $slug = trim($_GET['slug']);
} elseif (!empty($_SERVER['PATH_INFO'])) {
    $slug = trim($_SERVER['PATH_INFO'], '/');
}

$article = $slug ? find_publication($slug) : null;

/* =========================================================
   FALLBACK: no slug or slug not found → show listing
   ========================================================= */
if (!$article) {
?>
    <style>
        :root {
            --brand-ink: #0e1c2b;
            --brand-gold: #b08d57;
            --brand-muted: #6b7280;
            --brand-line: #e8e4dc;
            --brand-bg: #faf8f4;
        }

        .fallback-header {
            padding: 160px 0 80px;
            background: var(--brand-ink);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .fallback-header::after {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at 50% 0%, rgba(176, 141, 87, .25), transparent 60%);
            pointer-events: none;
        }

        .fallback-header .container {
            position: relative;
            z-index: 2;
        }

        .fallback-header h1 {
            color: #fff;
            font-size: clamp(2rem, 4.5vw, 3.2rem);
            margin: 0 0 16px;
            letter-spacing: -.02em;
            line-height: 1.15;
        }

        .fallback-header h1 i {
            color: var(--brand-gold);
            font-style: italic;
        }

        .fallback-header p {
            color: rgba(255, 255, 255, .72);
            font-size: 1.02rem;
            line-height: 1.7;
            max-width: 600px;
            margin: 0 auto;
        }

        .fallback-list {
            padding: 70px 0 100px;
            background: var(--brand-bg);
        }

        /* ---------- 3-column grid ---------- */
        .fallback-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 32px;
        }

        .fallback-item {
            display: flex;
            flex-direction: column;
            background: #fff;
            border: 1px solid var(--brand-line);
            border-radius: 16px;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        }

        .fallback-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px -18px rgba(14, 28, 43, .22);
            border-color: rgba(176, 141, 87, .4);
        }

        .fallback-item-media {
            position: relative;
            aspect-ratio: 16/10;
            overflow: hidden;
            background: #eee;
        }

        .fallback-item-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .7s cubic-bezier(.2, .7, .3, 1);
        }

        .fallback-item:hover .fallback-item-media img {
            transform: scale(1.06);
        }

        .fallback-item-type {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(255, 255, 255, .95);
            backdrop-filter: blur(6px);
            color: var(--brand-ink);
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            padding: 6px 12px;
            border-radius: 100px;
        }

        .fallback-item-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .fallback-item-date {
            font-size: .78rem;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: var(--brand-gold);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .fallback-item-body h3 {
            margin: 0 0 12px;
            font-size: 1.1rem;
            line-height: 1.4;
            color: var(--brand-ink);
            letter-spacing: -.01em;
        }

        .fallback-item-body p {
            margin: 0 0 18px;
            font-size: .88rem;
            color: var(--brand-muted);
            line-height: 1.6;
            flex: 1;
        }

        .fallback-item-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 16px;
            border-top: 1px solid var(--brand-line);
            font-size: .84rem;
        }

        .fallback-item-cat {
            color: var(--brand-muted);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 60%;
        }

        .fallback-item-read {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--brand-ink);
            font-weight: 600;
            transition: color .25s, gap .25s;
        }

        .fallback-item:hover .fallback-item-read {
            color: var(--brand-gold);
            gap: 9px;
        }

        .fallback-empty {
            grid-column: 1/-1;
            text-align: center;
            padding: 80px 24px;
            background: #fff;
            border: 1px dashed var(--brand-line);
            border-radius: 16px;
        }

        .fallback-empty h3 {
            color: var(--brand-ink);
            margin: 0 0 8px;
            font-size: 1.2rem;
        }

        .fallback-empty p {
            color: var(--brand-muted);
            margin: 0;
        }

        @media (max-width:1024px) {
            .fallback-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width:700px) {
            .fallback-header {
                padding: 120px 0 60px;
            }

            .fallback-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .fallback-list {
                padding: 50px 0 70px;
            }
        }
    </style>

    <main class="main-content">
        <section class="fallback-header">
            <div class="container">
                <h1>Our <i>Publications</i></h1>
                <p>Research articles, books, reports and conference papers authored by the attorneys of Stetson LLP.</p>
            </div>
        </section>

        <section class="fallback-list">
            <div class="container">
                <?php if (!empty($publications)): ?>
                    <div class="fallback-grid">
                        <?php foreach ($publications as $pub): ?>
                            <a href="<?php echo BASE_URL; ?>/publications.php/<?php echo urlencode($pub['slug']); ?>" class="fallback-item">
                                <div class="fallback-item-media">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/<?php echo htmlspecialchars($pub['image']); ?>"
                                        alt="<?php echo htmlspecialchars($pub['title']); ?>" loading="lazy">
                                    <span class="fallback-item-type"><?php echo htmlspecialchars($pub['type_label']); ?></span>
                                </div>
                                <div class="fallback-item-body">
                                    <div class="fallback-item-date"><?php echo pretty_date($pub['date']); ?></div>
                                    <h3><?php echo htmlspecialchars($pub['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($pub['author']); ?></br>
                                    <?php echo htmlspecialchars($pub['author_secondary']); ?></p>
                                    <div class="fallback-item-footer">
                                        <span class="fallback-item-cat"><?php echo htmlspecialchars($pub['category']); ?></span>
                                        <span class="fallback-item-read">
                                            Read Article
                                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14M13 6l6 6-6 6"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="fallback-empty">
                        <h3>No publications yet</h3>
                        <p>Check back soon.</p>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php
    include 'layouts/footer.php';
    exit;
}
?>

<style>
    :root {
        --brand-ink: #0e1c2b;
        --brand-gold: #b08d57;
        --brand-muted: #6b7280;
        --brand-line: #e8e4dc;
        --brand-bg: #faf8f4;
    }

    /* ---------- Hero ---------- */
    .pub-hero {
        padding: 150px 0 60px;
        background: var(--brand-ink);
        position: relative;
        overflow: hidden;
    }

    .pub-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse at 30% 20%, rgba(176, 141, 87, .25), transparent 60%);
        pointer-events: none;
    }

    .pub-hero .container {
        position: relative;
        z-index: 2;
        max-width: 860px;
    }

    .breadcrumbs {
        display: flex;
        gap: 8px;
        align-items: center;
        flex-wrap: wrap;
        font-size: .8rem;
        letter-spacing: .06em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, .55);
        margin-bottom: 24px;
    }

    .breadcrumbs a {
        color: rgba(255, 255, 255, .75);
        text-decoration: none;
        transition: color .25s;
    }

    .breadcrumbs a:hover {
        color: var(--brand-gold);
    }

    .breadcrumbs span.sep {
        opacity: .4;
    }

    .pub-hero-badge {
        display: inline-block;
        background: rgba(176, 141, 87, .15);
        color: var(--brand-gold);
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        padding: 7px 16px;
        border-radius: 100px;
        margin-bottom: 22px;
    }

    .pub-hero-title {
        color: #fff;
        font-size: clamp(1.9rem, 4vw, 3rem);
        line-height: 1.18;
        letter-spacing: -.02em;
        margin: 0 0 20px;
    }

    .pub-hero-subtitle {
        color: rgba(255, 255, 255, .72);
        font-size: 1.08rem;
        line-height: 1.65;
        margin: 0 0 32px;
        max-width: 720px;
    }

    .pub-hero-meta {
        display: flex;
        align-items: center;
        gap: 18px;
        flex-wrap: wrap;
        padding-top: 24px;
        border-top: 1px solid rgba(255, 255, 255, .12);
    }

    .pub-hero-meta img {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid rgba(255, 255, 255, .15);
    }

    .pub-hero-author {
        color: #fff;
        font-weight: 600;
        font-size: .95rem;
        display: block;
    }

    .pub-hero-meta .meta-small {
        color: rgba(255, 255, 255, .6);
        font-size: .82rem;
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 4px;
        flex-wrap: wrap;
    }

    .pub-hero-meta .dot {
        width: 3px;
        height: 3px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .4);
    }

    /* ---------- Cover ---------- */
    .pub-cover-wrap {
        background: #fff;
        margin-top: -40px;
        position: relative;
        z-index: 3;
    }

    .pub-cover {
        max-width: 1060px;
        margin: 0 auto;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 30px 60px -30px rgba(14, 28, 43, .3);
        aspect-ratio: 16/8;
        background: #eee;
    }

    .pub-cover img {
        margin-top: 1.5rem;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ---------- Body ---------- */
    .pub-body {
        padding: 80px 0 100px;
        background: #fff;
    }

    .pub-body .container {
        max-width: 780px;
    }

    .article-content {
        font-size: 1.06rem;
        line-height: 1.85;
        color: #2a3746;
    }

    .article-content>*+* {
        margin-top: 1.4em;
    }

    .article-content h2 {
        font-size: 1.5rem;
        line-height: 1.3;
        letter-spacing: -.015em;
        color: var(--brand-ink);
        margin: 2.4em 0 .8em;
        padding-bottom: .4em;
        position: relative;
    }

    .article-content h2::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 48px;
        height: 2px;
        background: var(--brand-gold);
    }

    .article-content h3 {
        font-size: 1.2rem;
        color: var(--brand-ink);
        margin: 2em 0 .6em;
        letter-spacing: -.01em;
    }

    .article-content p {
        margin: 0;
    }

    .article-content ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: .7em;
    }

    .article-content li {
        position: relative;
        padding-left: 26px;
    }

    .article-content li::before {
        content: "";
        position: absolute;
        left: 0;
        top: .7em;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--brand-gold);
    }

    .article-content strong {
        color: var(--brand-ink);
        font-weight: 600;
    }

    .article-content em {
        font-style: italic;
    }

    .article-content blockquote {
        margin: 2em 0;
        padding: 24px 28px;
        background: var(--brand-bg);
        border-left: 4px solid var(--brand-gold);
        border-radius: 0 12px 12px 0;
        font-style: italic;
        font-size: 1.05rem;
        color: var(--brand-ink);
    }

    .article-content .references {
        margin-top: 3.5em;
        padding-top: 2.5em;
        border-top: 1px solid var(--brand-line);
    }

    .article-content .references h2 {
        font-size: 1.1rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--brand-ink);
        margin: 0 0 20px;
    }

    .article-content .references h2::after {
        display: none;
    }

    .article-content .references ol {
        list-style: decimal;
        padding-left: 22px;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 12px;
        font-size: .94rem;
        color: var(--brand-muted);
        line-height: 1.7;
    }

    .article-content .references ol li::before {
        display: none;
    }

    .article-content .references ol li {
        padding-left: 0;
    }

    /* ---------- Author box ---------- */
    .author-box {
        margin-top: 4em;
        padding: 32px;
        background: var(--brand-bg);
        border: 1px solid var(--brand-line);
        border-radius: 16px;
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .author-box img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        flex-shrink: 0;
    }

    .author-box-body h4 {
        margin: 0 0 6px;
        color: var(--brand-ink);
        font-size: 1.02rem;
    }

    .author-box-body p {
        margin: 0;
        font-size: .92rem;
        color: var(--brand-muted);
        line-height: 1.65;
    }

    /* ---------- Share ---------- */
    .share-row {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-top: 40px;
        padding-top: 32px;
        border-top: 1px solid var(--brand-line);
        flex-wrap: wrap;
    }

    .share-label {
        font-size: .82rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--brand-muted);
    }

    .share-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        border: 1px solid var(--brand-line);
        color: var(--brand-ink);
        text-decoration: none;
        transition: all .25s ease;
    }

    .share-btn:hover {
        background: var(--brand-ink);
        color: #fff;
        border-color: var(--brand-ink);
        transform: translateY(-2px);
    }

    .back-row {
        margin-top: 60px;
        text-align: center;
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: var(--brand-ink);
        font-weight: 600;
        font-size: .92rem;
        text-decoration: none;
        transition: gap .25s, color .25s;
    }

    .back-link:hover {
        color: var(--brand-gold);
        gap: 14px;
    }

    @media (max-width:700px) {
        .pub-hero {
            padding: 120px 0 50px;
        }

        .pub-cover {
            aspect-ratio: 4/3;
            border-radius: 12px;
        }

        .pub-body {
            padding: 56px 0 70px;
        }

        .article-content {
            font-size: 1rem;
        }

        .author-box {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    }
</style>

<main class="main-content">

    <!-- ========== HERO ========== -->
    <section class="pub-hero">
        <div class="container">
            <nav class="breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo BASE_URL; ?>">Home</a>
                <span class="sep">/</span>
                <a href="<?php echo BASE_URL; ?>/publications">Publications</a>
                <span class="sep">/</span>
                <span><?php echo htmlspecialchars($article['type_label']); ?></span>
            </nav>

            <span class="pub-hero-badge"><?php echo htmlspecialchars($article['type_label']); ?></span>
            <h1 class="pub-hero-title"><?php echo htmlspecialchars($article['title']); ?></h1>
            <p class="pub-hero-subtitle"><?php echo htmlspecialchars($article['subtitle']); ?></p>

            <div class="pub-hero-meta">
                <!-- <img src="<?php echo BASE_URL; ?>/assets/images/<?php echo htmlspecialchars($article['author_img']); ?>"
                    alt="<?php echo htmlspecialchars($article['author']); ?>"> -->
                <div>
                    <span class="pub-hero-author"><?php echo htmlspecialchars($article['author']); ?></span>
                    <span class="pub-hero-author"><?php echo htmlspecialchars($article['author_secondary']); ?></span>
                    <div class="meta-small">
                        <span><?php echo pretty_date($article['date']); ?></span>
                        <span class="dot"></span>
                        <span><?php echo htmlspecialchars($article['read']); ?></span>
                        <!-- <span class="dot"></span>
                        <span><?php echo htmlspecialchars($article['category']); ?></span> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== COVER IMAGE ========== -->
    <div class="pub-cover-wrap">
        <div class="container">
            <figure class="pub-cover">
                <img src="<?php echo BASE_URL; ?>/assets/images/<?php echo htmlspecialchars($article['image']); ?>"
                    alt="<?php echo htmlspecialchars($article['title']); ?>">
            </figure>
        </div>
    </div>

    <!-- ========== ARTICLE BODY ========== -->
    <section class="pub-body">
        <div class="container">
            <article class="article-content">

                <?php echo $article['body']; ?>

                <!-- Author box -->
                <div class="author-box">
                    <!-- <img src="<?php echo BASE_URL; ?>/assets/images/<?php echo htmlspecialchars($article['author_img']); ?>"
                        alt="<?php echo htmlspecialchars($article['author']); ?>"> -->
                    <div class="author-box-body">
                        <h4><?php echo htmlspecialchars($article['author']); ?></h4>
                        <h4 style="font-weight: normal; font-style: italic; font-size: 1.25em;">&</h4>
                        <h4><?php echo htmlspecialchars($article['author_secondary']); ?></h4>
                        <!-- <p><?php echo htmlspecialchars($article['author_bio']); ?></p> -->
                    </div>
                </div>

                <!-- Share -->
                <div class="share-row">
                    <span class="share-label">Share this article</span>
                    <a href="https://x.com/intent/tweet?url=<?php echo urlencode(BASE_URL . '/publication.php?slug=' . $article['slug']); ?>"
                        target="_blank" rel="noopener" class="share-btn" aria-label="Share on X">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(BASE_URL . '/publication.php?slug=' . $article['slug']); ?>"
                        target="_blank" rel="noopener" class="share-btn" aria-label="Share on LinkedIn">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>
                    <a href="mailto:?subject=<?php echo urlencode($article['title']); ?>&body=<?php echo urlencode(BASE_URL . '/publication.php?slug=' . $article['slug']); ?>"
                        class="share-btn" aria-label="Share via email">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                    </a>
                </div>

                <!-- Back -->
                <div class="back-row">
                    <a href="publication.php" class="back-link">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 12H5M12 19l-7-7 7-7" />
                        </svg>
                        Back to all publications
                    </a>
                </div>

            </article>
        </div>
    </section>

</main>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ScholarlyArticle",
        "headline": "<?php echo addslashes($article['title']); ?>",
        "author": {
            "@type": "Person",
            "name": "<?php echo addslashes($article['author']); ?>"
        },
        "datePublished": "<?php echo $article['date']; ?>",
        "publisher": {
            "@type": "Organization",
            "name": "Stetson LLP"
        },
        "description": "<?php echo addslashes($article['subtitle']); ?>"
    }
</script>

<?php include 'layouts/footer.php'; ?>