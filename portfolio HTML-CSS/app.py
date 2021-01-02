from flask import Flask, render_template
import requests
import gunicorn

app = Flask(__name__)
app.config["DEBUG"] = True

@app.route("/")
def render_landing_page():
    return render_template("yt_portfolio.html")

@app.route("/templates/portfolio-item-1.html")
def render_portfolio_item_1():
    return render_template("portfolio-item-1.html")

@app.route("/templates/portfolio-item-2.html")
def render_portfolio_item_2():
    return render_template("portfolio-item-2.html")

@app.route("/templates/portfolio-item-3.html")
def render_portfolio_item_3():
    return render_template("portfolio-item-3.html")

@app.route("/templates/portfolio-item-4.html")
def render_portfolio_item_4():
    return render_template("portfolio-item-4.html")    

@app.route("/templates/portfolio-item-5.html")
def render_portfolio_item_5():
    return render_template("portfolio-item-5.html")
    
@app.route("/templates/portfolio-item-6.html")
def render_portfolio_item_6():
    return render_template("portfolio-item-6.html")
    
@app.route("/templates/portfolio-item-7.html")
def render_portfolio_item_7():
    return render_template("portfolio-item-7.html")
    
@app.route("/templates/portfolio-item-8.html")
def render_portfolio_item_8():
    return render_template("portfolio-item-8.html")
    
@app.route("/templates/portfolio-item-9.html")
def render_portfolio_item_9():
    return render_template("portfolio-item-9.html")
    
@app.route("/templates/portfolio-item-10.html")
def render_portfolio_item_10():
    return render_template("portfolio-item-10.html")
    
@app.route("/templates/portfolio-item-11.html")
def render_portfolio_item_11():
    return render_template("portfolio-item-11.html")
    
@app.route("/templates/portfolio-item-12.html")
def render_portfolio_item_12():
    return render_template("portfolio-item-12.html")

if __name__ == "__main__":
    app.run(host="0.0.0.0", port="5000")
