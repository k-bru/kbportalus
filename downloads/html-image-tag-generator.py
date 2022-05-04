from PIL import Image
from tkinter import Tk
from tkinter.filedialog import askopenfilename
import pyperclip

Tk().withdraw()
filename = askopenfilename()

im = Image.open(filename)

w, h = im.size

imageTag = f"<img src=\"{filename}\", width=\"{w}\", height=\"{h}\", alt=\"\">"

pyperclip.copy(imageTag)