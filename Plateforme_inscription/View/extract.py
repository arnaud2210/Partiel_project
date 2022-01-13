import requests
from bs4 import BeautifulSoup

url = "https://www.whed.net/home.php"
page = requests.get(url)
soup = BeautifulSoup(page.content, 'html.parser')

coutries = soup.find_all('option')

for country in coutries:
    print(country.string)
    
