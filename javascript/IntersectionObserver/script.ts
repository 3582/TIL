// IntersectionObserverのオプションに対するインターフェース定義
interface IntersectionObserverOptions {
  root: Element | null;
  rootMargin: string;
  threshold: number;
}

document.addEventListener('DOMContentLoaded', () => {
  const options: IntersectionObserverOptions = {
    root: null, // ビューポートに対して相対的
    rootMargin: '0px',
    threshold: 0.5 // 60%がビューポートに入ったときにトリガー
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        (entry.target as HTMLElement).style.backgroundColor = 'green';
        // 一度だけ変更したい場合は次の行のコメントを外してください
        // observer.unobserve(entry.target);
      } else {
        (entry.target as HTMLElement).style.backgroundColor = 'lightgray';
      }
    });
  }, options);

  // 監視するターゲット要素を選択
  const targets = document.querySelectorAll('.target-element');
  targets.forEach(target => {
    observer.observe(target as Element);
  });
});
