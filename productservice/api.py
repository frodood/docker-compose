from flask import Flask
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class Product(Resource):
	"""docstring for Product"""
	def get(self):
		return{
		'products':['Ice Crea', 
						'chocolates',
						'eggs','cigis']
					}
api.add_resource(Product, '/')
if __name__ == '__main__':
	app.run(host='0.0.0.0', port=9001, debug=True)
