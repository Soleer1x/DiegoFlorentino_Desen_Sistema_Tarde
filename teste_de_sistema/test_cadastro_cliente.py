from selenium import webdriver
from selenium.webdriver.common.by import By
import time

#configuracao do webdriver
driver = webdriver.Chrome()

# acessa a pagina de cadastro de cadastro usadno 


driver.get("file:///C:/Users/diego_florentino/Downloads/teste_de_sistema/index.html")

nome_input = driver.find_element(By.ID, "name")
nome_input.send_keys("João da Silva")

cpf_input = driver.find_element(By.ID, "cpf")
cpf_input.send_keys("12345678901")

endereco_input = driver.find_element(By.ID, "address")
endereco_input.send_keys("Rua das Flores, 123")
 
telefone_input = driver.find_element(By.ID, "phone")
telefone_input.send_keys("119876543")

# clica no botao cadastrar
submit_button = driver.find_element(By.CSS_SELECTOR, "button[type='submit']")
submit_button.click()

time.sleep(600)

# fechar navegador
#driver.quit()