document.addEventListener('DOMContentLoaded', function () {
    var options = {
        root: null, // ビューポートに対して相対的
        rootMargin: '0px',
        threshold: 0.5 // 60%がビューポートに入ったときにトリガー
    };
    var observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.style.backgroundColor = 'green';
                // 一度だけ変更したい場合は次の行のコメントを外してください
                // observer.unobserve(entry.target);
            }
            else {
                entry.target.style.backgroundColor = 'lightgray';
            }
        });
    }, options);
    // 監視するターゲット要素を選択
    var targets = document.querySelectorAll('.target-element');
    targets.forEach(function (target) {
        observer.observe(target);
    });
});
