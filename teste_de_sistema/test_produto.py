from selenium import webdriver
from selenium.webdriver.common.by import By
import time

# configuracao do webdriver
driver = webdriver.Chrome()

# acessa a pagina de cadastro
driver.get("file:///C:/Users/diego_florentino/Documents/GitHub/DiegoFlorentino_Desen_Sistema_Tarde/teste_de_sistema/tela_produto.html")

# pequena pausa para garantir que os elementos carreguem
time.sleep(1)

peca_input = driver.find_element(By.ID, "peca")
peca_input.send_keys("203")

descricao_input = driver.find_element(By.ID, "descricao")
descricao_input.send_keys("O melhor produto")

marca_input = driver.find_element(By.ID, "marca")
marca_input.send_keys("Nike")

preco_input = driver.find_element(By.ID, "preco")
preco_input.send_keys("R$400.00")

quantidade_input = driver.find_element(By.ID, "quantidade")
quantidade_input.send_keys("12")

# clica no botao cadastrar
submit_button = driver.find_element(By.CSS_SELECTOR, "button[type='submit']")
submit_button.click()

time.sleep(600)

# fechar navegador
# driver.quit()
