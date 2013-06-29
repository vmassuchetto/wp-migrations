MAINFILE = slides
FILES = $(MAINFILE).tex `ls $(MAINFILE)-*.tex | grep -v "diff"`

LATEXCC=rubber
LATEXCC_P=--pdf

export TEXMFHOME:=./texmf

.PHONY: all diff doc clean

all: pdf

pdf:
	$(LATEXCC) $(LATEXCC_P) $(MAINFILE).tex

diff:
	latexdiff-git $(HASH) $(FILES)
	latexdiff-git $(HASH) $(FILES)

html: pdf
	latex2html $(MAINFILE).tex \
		-split 0 \
		-no_navigation \
		-info "" \
		-address "" \
		-html_version 4.0,unicode

odt: html
	libreoffice --headless \
		--convert-to odt:"OpenDocument Text Flat XML" \
		$(MAINFILE)/index.html
	mv index.odt $(MAINFILE).odt

clear:
	rm -rf *diff* img/*.4og $(MAINFILE) $(MAINFILE).aux \
		$(MAINFILE).log $(MAINFILE).blg $(MAINFILE).bbl \
		$(MAINFILE).toc $(MAINFILE).out $(MAINFILE).lof \
		$(MAINFILE).snm $(MAINFILE).nav $(MAINFILE).vrb \
		$(MAINFILE).lot $(MAINFILE).idx $(MAINFILE).bib.bak \
		X.tex

clean: clear
	rm -f *~ $(MAINFILE).odt $(MAINFILE).pdf $(MAINFILE).doc
