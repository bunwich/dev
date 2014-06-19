set tabstop=4
set nu
set ruler

" forces vim instead of vi
set nocompatible

set autoindent

" always show a status line
set laststatus=2

" show partial commands
set showcmd

" highlight matching {}
set showmatch

" sts - soft tab stops, et - expand tabs, sw = shift width
au BufRead,BufNewFile *.ejs set filetype=html
autocmd FileType ruby,eruby,yaml,html set sw=2 sts=2 et

set background=dark

" forces wordwrapped lines to break at spaces instead of midword
set linebreak

" change vim swap location
set backupdir=~/apps/temp
set directory=~/apps/temp
