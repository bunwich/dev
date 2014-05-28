# .bash_profile

# Get the aliases and functions
if [ -f ~/.bashrc ]; then
	. ~/.bashrc
fi

# User specific environment and startup programs

PATH=$PATH:$HOME/.local/bin:$HOME/bin:$HOME/apps/bin

export PATH

devilspie -a &


# xinput --set-prop "DELL DELL USB Laser Mouse" "Device Accel Constant Deceleration" 2.250000
