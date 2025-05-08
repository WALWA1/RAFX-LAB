 ____        __
|  _ \ __ _ / _| __ _   ___  ___  ___
| |_) / _` | |_ / _` | / __|/ _ \/ __|
|  _ < (_| |  _| (_| | \__ \  __/ (__
|_| \_\__,_|_|  \__,_| |___/\___|\___|


Author: Rafu
Contact: @rafa_support (Telegram)
🧪 Lab Description

This XSS lab includes 5 levels to practice Cross-Site Scripting vulnerabilities:

    Very Easy

    Easy

    Medium

    Hard

    Insane

Each level has increasing difficulty and is designed to simulate real-world XSS scenarios.
⚙️ How to Run (WSL or Linux)

    Make sure PHP is installed:

sudo apt install php-cli -y

Navigate to the lab directory:

cd ~/xss-lab

Run the PHP built-in server:

php -S 127.0.0.1:8000

Open your browser:

    http://127.0.0.1:8000

🛠️ Troubleshooting

If you get a systemd or dpkg error, run the following:

sudo dpkg --remove --force-remove-reinstreq systemd
sudo apt-mark hold systemd
sudo dpkg --configure -a
sudo apt update
sudo apt --fix-broken install
