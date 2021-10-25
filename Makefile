#
# GNU Makefile for building periplus docs
#

all: docs/adv3Lite/toc.html docs/adv3Lite/topics.html docs/adv3/toc.html docs/adv3/topics.html

.DELETE_ON_ERROR:

clean:
	rm -f docs/adv3Lite/toc.html
	rm -f docs/adv3Lite/topics.html
	rm -f docs/adv3/toc.html
	rm -f docs/adv3/topics.html

docs/adv3Lite/toc.html: util/bytopic/bytopic.php util/bytopic/adv3lite.php util/bytopic/adv3lite_*.html
	php -f util/bytopic/bytopic.php adv3lite toc > $@

docs/adv3Lite/topics.html: util/bytopic/bytopic.php util/bytopic/adv3lite.php util/bytopic/adv3lite_*.html
	php -f util/bytopic/bytopic.php adv3lite topics > $@

docs/adv3/toc.html: util/bytopic/bytopic.php util/bytopic/adv3.php util/bytopic/adv3_*.html
	php -f util/bytopic/bytopic.php adv3 toc > $@

docs/adv3/topics.html: util/bytopic/bytopic.php util/bytopic/adv3.php util/bytopic/adv3_*.html
	php -f util/bytopic/bytopic.php adv3 topics > $@
