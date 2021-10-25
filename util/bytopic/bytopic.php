<?php

/**
 * Quick and dirty script to produce periplus table of contents and topics
 * HTML files.
 *
 * Script accepts two arguments:
 * ```
 * php -f bytopic.php <library file> [toc|topics]
 * ```
 * HTML is written to stdout.  The static .html in /docs is designed to host
 * these two files in a `frameset`.
 *
 * The `<library file>` is another PHP script containing a single `$topics`
 * array which structures the sections and links.  See adv3lite.php for a
 * working example.
 */

function esc(string $text): string
{
  return htmlentities($text, ENT_QUOTES | ENT_HTML401);
};

$esc = 'esc';

class Topic
{
  const TARGET = 'classes';

  public static $curr_topic_num = 0;

  public $title;
  public $fragment;
  public $default_class;
  public $classes;
  public $extra;
  public $base;
  public $target;

  public function __construct(
    string $title,
    string $default_class,
    array $classes,
    array $extra = [],
    string $base = 'libref/object/'
  ) {
    $this->title = $title;
    $this->default_class = $default_class;
    $this->classes = $classes;
    $this->extra = $extra;
    $this->base = $base;
    $this->target = self::TARGET;

    $num = self::$curr_topic_num++;
    $this->fragment = "topic_$num";
  }

  public function emit()
  {
    global $esc;

    $top = "<a href='#top' style='font-size: small'>{$esc('[top]')}</a>\n";
    echo "<h2 id='{$this->fragment}'>{$esc($this->title)} $top </h2>\n";

    if (!empty($this->extra))
      $this->emitExtras($this->extra);

    $this->emitEntry($this->classes);
  }

  private function emitExtras($extra) {
    echo "<ul>\n";
    foreach ($extra as $text => $url) {
      if (is_string($url))
        $this->emitListItem($text, $url, '<i>', '</i>');
      else
        $this->emitExtras($url);
    }
    echo "</ul>\n";
  }

  private function emitEntry($entry)
  {
    if (is_string($entry)) {
      if (strpos($entry, '!') === 0) {
        $entry = substr($entry, 1);
        $this->emitListItem($entry, false, '<b>', '</b>');
      } else {
        $this->emitListItem($entry, null, '<code>', '</code>');
      }
      return;
    }

    // sub-array
    echo "<ul>\n";
    foreach ($entry as $subentry)
      $this->emitEntry($subentry);
    echo "</ul>\n";
  }

  private function emitListItem($entry, $url = null, $pre = null, $post = null)
  {
    global $esc;

    if ($entry === '---') {
      echo "</ul><ul>";
      return;
    }

    if ($url === null)
      $url = "{$this->base}$entry.html";

    if ($entry === $this->default_class) {
      $pre = "<b>$pre";
      $post = "$post</b>";
    }

    if ($url)
      echo "<li>$pre<a href='$url' target='{$this->target}'>{$esc($entry)}</a>$post</li>\n";
    else
      echo "<li>$pre{$esc($entry)}$post</li>\n";
  }
}

function tail() {
  echo '
</body>
</html>
';
}

// include the library file ... this should contain a single variable, $topics, laid
// out to present the topics
include "{$argv[1]}.php";

readfile("util/bytopic/{$argv[1]}_head.html");
echo "<body id='idx'>\n";

if ($argv[2] == 'toc') {
  // table of contents (toc) file ... this is the top-left frame
  readfile("util/bytopic/{$argv[1]}_toc_top.html");
  echo '  <h2 id="toc">Topics</h2>', "\n";

  echo "<ul>\n";
  foreach ($topics as $topic) {
    $fragment = "topics.html#{$topic->fragment}";
    echo "<li><a href='$fragment' target='topics'>{$esc($topic->title)}</a></li>\n";
  }
  echo "</ul>\n";
} else if ($argv[2] == 'topics') {
  // topics file ... this is the bottom-left frame
  foreach ($topics as $topic)
    $topic->emit();
} else {
  echo "Unknown option \"{$argv[2]}\"\n";
  exit(1);
}

tail();
