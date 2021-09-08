#
# GNU Makefile for building periplus docs
#

all: docs/adv3Lite/toc.html docs/adv3Lite/topics.html

.DELETE_ON_ERROR:

clean:
	rm -f docs/adv3Lite/toc.html
	rm -f docs/adv3Lite/topics.html

docs/adv3Lite/toc.html: util/bytopic/bytopic.php util/bytopic/adv3lite.php
	php -f util/bytopic/bytopic.php adv3lite toc > $@

docs/adv3Lite/topics.html: util/bytopic/bytopic.php util/bytopic/adv3lite.php
	php -f util/bytopic/bytopic.php adv3lite topics > $@
