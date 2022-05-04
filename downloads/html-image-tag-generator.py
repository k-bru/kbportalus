from PIL import Image
from tkinter import Tk
from tkinter.filedialog import askopenfilename
import pyperclip

Tk().withdraw()
filename = askopenfilename()

image = filename
im = Image.open(image)

w, h = im.size

imageTag = f"<img src='{image}', alt='', width='{w}', height='{h}'>"

pyperclip.copy(imageTag)
print("Copied image tag to clipboard")