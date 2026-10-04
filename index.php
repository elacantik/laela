</div>
</aside>
</div>
</section>
<section class="section">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Program Studi</span>
            <h2>Contoh data dinamis dari database</h2>
        </div>
        <div class="grid-3">
            <?php while ($program = $programResult->fetch_assoc()): ?>
                <article class="card">
                    <span class="badge"><?= htmlspecialchars($program['jenjang']) ?></span>
                    <h3><?= htmlspecialchars($program['nama']) ?></h3>
                    <p><?= htmlspecialchars($program['deskripsi']) ?></p>
                </article>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="section section-soft">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow">Berita</span>
                <h2>Informasi terbaru</h2>
            </div>
            <div class="grid-3">
                <?php while ($news = $newsResult->fetch_assoc()): ?>
                    <article class="card">
                        <p class="meta"><?= date('d M Y', strtotime($news['tanggal_publish'])) ?></p>
                        <h3><?= htmlspecialchars($news['judul']) ?></h3>
                        <p><?= htmlspecialchars($news['ringkasan']) ?></p>
                        <a href="news_detail.php?id=<?= (int) $news['id'] ?>">Baca selengkapnya</a>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php require 'includes/footer.php'; ?>
