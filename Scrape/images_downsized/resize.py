from PIL import Image, ImageFilter
import os
import glob
import pdb # pdb.set_trace()

# png to jpg
# pngFiles = glob.glob("../images/*/*.png")
# for file in pngFiles:
#     dirName = os.path.split(os.path.dirname(file))[1]
#     fileName = os.path.splitext(os.path.basename(file))[0]
#     saveDir = './' + dirName
#     saveFile = saveDir + '/' + fileName + '.jpg'
#     if not os.path.exists(saveDir):
#         os.mkdir(saveDir)
#     image = Image.open(file).convert('RGB')
#     image.save(saveFile)

# downsize jpg in this dir
# jpgFiles = glob.glob("./*/*.jpg")
# for file in jpgFiles:
#     dirName = os.path.split(os.path.dirname(file))[1]
#     fileName = os.path.basename(file)
#     saveDir = './' + dirName
#     saveFile = saveDir + '/' + fileName
#     image = Image.open(file)
#     if image.width > 700:
#         width = 700
#         height = int(width * image.size[1] / image.size[0])
#         resizedImg = image.resize((width, height))
#         resizedImg.save(saveFile, quality=97)
#     else:
#         resizedImg = image.resize((image.width, image.height))
#         resizedImg.save(saveFile, quality=97)

jpgFiles = glob.glob("../images/*/*.jpg")
for file in jpgFiles:
    dirName = os.path.split(os.path.dirname(file))[1]
    fileName = os.path.basename(file)
    saveDir = './' + dirName
    saveFile = saveDir + '/' + fileName
    if not os.path.exists(saveDir):
        os.mkdir(saveDir)
    image = Image.open(file)
    if image.width > 700:
        width = 700
        height = int(width * image.size[1] / image.size[0])
        resizedImg = image.resize((width, height))
        resizedImg.save(saveFile, quality=97)
    else:
        resizedImg = image.resize((image.width, image.height))
        resizedImg.save(saveFile, quality=97)
