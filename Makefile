all:
	pdflatex slides.tex
	pdflatex slides.tex
	make clean

clean:
	rm -f *~ \
		slides.aux \
		slides.log \
		slides.nav \
		slides.out \
		slides.snm \
		slides.vrb \
		slides.toc
