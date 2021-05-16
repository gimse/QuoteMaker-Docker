# QuoteMaker-simple
Same as the "QuoteMaker" repository, but it doesn't need composer installation
### Installation
Just clone/download it.
### Documentation
[Click here](https://github.com/masokky/QuoteMaker) to see full documentation.
## Setup (Docker)
- Install [Docker](https://www.docker.com)
- ``docker build -t quote-maker-simple .``
- ``docker run -p 8008:8008 quote-maker-simple``
- Or for images from [unsplash](https://unsplash.com): ``docker run -p 8008:8008 --env UNSPLASH_KEY=<your key from https://unsplash.com> quote-maker-simple``
- Open [http://localhost:8008/?text=May%20the%20Force%20be%20with%20you&watermarkText=Some%20Dude](http://localhost:8008/?text=May%20the%20Force%20be%20with%20you&watermarkText=Some%20Dude)